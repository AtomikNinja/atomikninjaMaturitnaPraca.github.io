var nakupnyKosik = (function () {

  kosik = [];


  function Item(nazov, cena, pocet) {
    this.nazov = nazov;
    this.cena = cena;
    this.pocet = pocet;
  }

  function ulozitKosik() {
    sessionStorage.setItem('nakupnyKosik', JSON.stringify(kosik));
  }

  function nacitatKosik() {
    kosik = JSON.parse(sessionStorage.getItem('nakupnyKosik'));
  }
  if (sessionStorage.getItem("nakupnyKosik") != null) {
    nacitatKosik();
  }

  var obj = {};


  obj.pridatPolozkuDoKosika = function (nazov, cena, pocet) {
    for (var item in kosik) {
      if (kosik[item].nazov === nazov) {
        kosik[item].pocet++;
        ulozitKosik();
        return;
      }
    }
    var item = new Item(nazov, cena, pocet);
    kosik.push(item);
    ulozitKosik();
  }

  obj.nastavitPocetPrePolozku = function (nazov, pocet) {
    for (var i in kosik) {
      if (kosik[i].nazov === nazov) {
        kosik[i].pocet = pocet;
        break;
      }
    }
    ulozitKosik();
  }

  obj.odtranitPolozkuZKosika = function (nazov) {
    for (var item in kosik) {
      if (kosik[item].nazov === nazov) {
        kosik[item].pocet--;
        if (kosik[item].pocet === 0) {
          kosik.splice(item, 1);
        }
        break;
      }
    }
    ulozitKosik();
  }


  obj.odtranitPolozkuZKosikaAll = function (nazov) {
    for (var item in kosik) {
      if (kosik[item].nazov === nazov) {
        kosik.splice(item, 1);
        break;
      }
    }
    ulozitKosik();
  }


  obj.vyprazdnitKosik = function () {
    kosik = [];
    alert("Vaša objednávka bola odoslaná, ďakujeme za objednávku!");
    ulozitKosik();
  }


  obj.spoluPocet = function () {
    var spoluPocet = 0;
    for (var item in kosik) {
      spoluPocet += kosik[item].pocet;
    }
    return spoluPocet;
  }


  obj.spoluKosik = function () {
    var spoluKosik = 0;
    for (var item in kosik) {
      spoluKosik += kosik[item].cena * kosik[item].pocet;
    }
    return Number(spoluKosik.toFixed(2));
  }

  obj.vlozKosikDoFormulara = function () {
    $("textarea#kosikJSON").val(JSON.stringify(kosik));

    //return JSON.stringify(kosik);
  }

  obj.vypisatKosik = function () {
    var kosikCopy = [];
    for (i in kosik) {
      item = kosik[i];
      itemCopy = {};
      for (p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.cena * item.pocet).toFixed(2);
      kosikCopy.push(itemCopy)
    }
    return kosikCopy;
  }


  return obj;
})();



$('.pridatDoKosika').click(function (event) {
  event.preventDefault();
  var nazov = $(this).data('nazov');
  var cena = Number($(this).data('cena'));
  nakupnyKosik.pridatPolozkuDoKosika(nazov, cena, 1);
  zobrazitKosik();
});


/* $('.resetovatKosik').click(function () {
   nakupnyKosik.vyprazdnitKosik();
   zobrazitKosik();
 }); */


function zobrazitKosik() {
  var kosikZoznam = nakupnyKosik.vypisatKosik();
  var output = "";
  for (var i in kosikZoznam) {
    output += "<tr>"
      + "<td class='nazovTd'>" + kosikZoznam[i].nazov + "</td>"
      + "<td class='cenaTd'>(" + kosikZoznam[i].cena + ")</td>"
      + "<td><div class='vstupSkupina'><button class='minusPolozka vstupSkupinaAddon btn btnHlavny' data-nazov=" + kosikZoznam[i].nazov + ">-</button>"
      + "<input type='number' class='polozkaPocet kontrolaFormy' data-nazov='" + kosikZoznam[i].nazov + "' value='" + kosikZoznam[i].pocet + "'>"
      + "<button class='plusPolozka btn btnHlavny vstupSkupinaAddon' data-nazov=" + kosikZoznam[i].nazov + ">+</button></div></td>"
      + "<td><button class='vymazatPolozka btn btnReset' data-nazov=" + kosikZoznam[i].nazov + ">X</button></td>"
      + " = "
      + "<td class='spoluTd'>" + kosikZoznam[i].total + "</td>"
      + "</tr>";
  }
  $('.showKosik').html(output);
  $('.kosikSpolu').html(nakupnyKosik.spoluKosik());
  $('.spoluPocet').html(nakupnyKosik.spoluPocet());
}


$('.showKosik').on("click", ".vymazatPolozka", function (event) {
  var nazov = $(this).data('nazov')
  nakupnyKosik.odtranitPolozkuZKosikaAll(nazov);
  zobrazitKosik();
})


$('.showKosik').on("click", ".minusPolozka", function (event) {
  var nazov = $(this).data('nazov')
  nakupnyKosik.odtranitPolozkuZKosika(nazov);
  zobrazitKosik();
})

$('.showKosik').on("click", ".plusPolozka", function (event) {
  var nazov = $(this).data('nazov')
  nakupnyKosik.pridatPolozkuDoKosika(nazov);
  zobrazitKosik();
})


$('.showKosik').on("change", ".polozkaPocet", function (event) {
  var nazov = $(this).data('nazov');
  var pocet = Number($(this).val());
  nakupnyKosik.nastavitPocetPrePolozku(nazov, pocet);
  zobrazitKosik();
});

zobrazitKosik();
nakupnyKosik.vlozKosikDoFormulara();

//console.log(nakupnyKosik.ziskajKosik());