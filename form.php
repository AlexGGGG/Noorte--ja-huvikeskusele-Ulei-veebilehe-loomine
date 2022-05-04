<?php error_reporting(0); ?>

<?php $isVisitor = isset($_POST['visitor']);?>

<div class="modal fade" tabindex="-1" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content p-3 m-3">
<form role="form" class="form-horizontal" id="myForm" action="process.php" method="POST" >
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Форма входа на работу</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
    <input type="hidden" name="employee_id" value="<?php echo $employee_id ?>" />
    <input type="hidden" name="isVisitor" value="<?php echo $isVisitor ?>" />
    <div class="form-group pt-2">
    <label for="first_name">Имя:</label>
    <input id="firstNameInput" class="form-control" type="text" name="first_name" placeholder="First name" value="<?php echo $first_name; ?>" title="First name" autocomplete="off" required/>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Пожалуйста заполните эту строчку.</div>
    </div>
    <div class="form-group pt-2">
    <label>Фамилия:</label>
    <input id="lastNameInput" class="form-control" type="text" name="last_name" placeholder="Last name" value="<?php echo $last_name; ?>" title="Last name" autocomplete="off" required/>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Пожалуйста заполните эту строчку.</div>
    </div>
  
    <div class="form-check">
        <label class="pr-4">Поставьте галочку для входа:</label>
        <input class="form-check-input" type="checkbox" name="temp_check" value="1" title="make sure you check your temperature with the thermometer provided"/>
    <div class="valid-feedback">Вход Удался</div>
    <div class="invalid-feedback">Пожалуйста заполните эту строчку.</div>
    </div>
    
     <div class="modal-footer">
      <?php if(isset($_GET['edit'])): ?>
      <button class="btn btn-warning btn-block" type="submit" name="update">Нажать</button>
      <?php else: ?>
      <button class="btn btn-primary btn-block" type="submit" name="save">Вход</button>
      <?php endif ?>
    
      <!-- Modal footer -->
      <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Закрыть</button>
        </div>
</form>
</div>
</div>
</div>

<script>
function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("btnOpnCheckIn").style.display = "block";
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("btnOpnCheckIn").style.display = "none";
}
  var fNameArray = ["Christalle","Hobart","Mureil","Chandal","Berkeley","Thorvald","Andria","Lori","Fan","Bing","Quent","Faye","Smitty","Vinita","Marina","Griselda","Ulrike","Dom","Bridgette","El","Kelsy","Codee","Preston","Bell","Homere","Ezekiel","Jason","Walden","Garald","Marten","Gerard","Shirley","Holly","Enrique","Tremaine","Basilius","Isidora","Olive","Lyn","Dulcinea","Franzen","Aimil","Byrom","Pail","Teresa","Vere","Baily","Lannie","Ara","Karlen","Adan","Syd","Bibby","Perice","Edgar","Clareta","Ashleigh","Rivi","Axe","Arty","Bev","Mariquilla","Sloane","Christel","Valera","Morgana","Timotheus","Asher","Cindi","Daron","Mack","Jarvis","Ulrika","Roxanna","Charleen","Rodrick","Valeda","Rafe","Christabel","Gwennie","Gnni","Charlot","Maryjo","Ruprecht","Corette","Caldwell","Hildegarde","Jandy","Annabelle","Elfrida","Averell","Noby","Honor","Donelle","Jaymee","Gwenora","Ralf","Osgood","Yorke","Maryann","Bessie","Cecily","Marna","Trenton","Elberta","Arv","Nicky","Bendick","Alanna","Milli","Cass","Antoine","Danella","Toni","Kathrine","Con","Al","Antonetta","Arleyne","Rori","Jonas","Nobie","Alberik","Tallou","Niles","Gun","Adore","Ellynn","Innis","Kattie","Rebeka","Vassily","Rahel","Ag","Joscelin","Jack","Brew","Delcina","Addi","Kessia","Brianne","Cully","Madella","Cam","Harlan","Kala","Jeannie","Bradly","Brody","Guillema","Gabbi","Elisha","Bobina","Windham","Erik","Corrine","Vassili","Lemmie","Gwyn","Lizette","Emelia","Diego","Antoinette","Odetta","Merrily","Winny","Libbie","Ogden","Zitella","Philly","Thadeus","Josepha","Anissa","Bord","Deanne","Gerladina","Daron","Hatty","Avis","Percy","Aurore","Ryann","Emmey","Salvatore","Barbara","Alyce","Belle","Nomi","Karlyn","Natty","Karlan","Carie","Mimi","Monti","Maxie","Farly","Agnella","Glynis","Francine","Magdaia","Chandler","Freddy","Raff","Janella","Esma","Piggy","Laure","Tad","Drugi","Cory","Carey","Mel","Wallis","Jefferey","Doyle","Raeann","Ashli","Trisha","Larine","Benyamin","Tabb","Mason","Mayer","Afton","Gerry","Gretta","Nikki","Emlynne","Kylie","Heriberto","Barry","Norris","Ilaire","Jordan","Malachi","Leela","Zsazsa","Buckie","Symon","Hurlee","Alethea","Kaile","Belita","Clint","Yardley","Padraig","Yuri","Vilhelmina","Arthur","Danita","Ileana","Jamaal","Geoffry","Steward","Katina","Aretha","Guillema","Inglebert","Camile","Dorthea","Pavel","Corbet","Tony","Mira","Philippe","Polly","Miranda","Jocko","Valery","Gwynne","Hussein","Hasheem","Raimondo","Pamelina","Blinni","Batholomew","Michaella","Bayard","Garrott","Gertruda","Norrie","Monro","Adair","Marylynne","Tine","Melitta","Matty","Kelly","Vinnie","Aura","Janie","Yorker","Giuditta","Zilvia","Jarrett","Jordon","Zak","Colly","Bride","Erina","Kissiah","Meredeth","Portie","Chev","Idette","Jeanine","Gerrie","Berrie","Nickie","Darn","Gerrie","Dorri","Benn","Astrix","Evaleen","Lynnette","Maryann","Kaleb","Mariel","Carolyne","Robena","Leonardo","Rory","Corly","Cristie","Erv","Nicol","Peg","Garth","Ileane","Kayley","Kellina","Portie","Pablo","Sybil","Sherry","Jacquelin","Deonne","Collete","Denis","Miguel","Martguerita","Ermentrude","Carolin","Merill","Griswold","Donella","Brittni","Venita","Dolph","Claudell","Osborne","Dal","Tiff","Nickie","Ariela","Olva","Denys","Wilbur","Ingrim","Yardley","Damita","Denise","Maressa","Mateo","Elena","Stephan","Richardo","Merell","Leonora","Beilul","Anissa","Viviene","Yankee","Christoffer","Joelle","Angelika","Josefa","Winslow","Kellina","Avery","Stevie","Revkah","Nowell","Patsy","Linea","Nate","Harmonie","Laurene","Ardra","Honor","Ruperto","Joella","Shirlee","Paddie","Verney","Susan","Pearle","Shirl","Elisabet","Markos","Cicily","Cosmo","Leicester","Del","Thomasina","Lauryn","Raphaela","Myca","Devin","Philly","Charmain","Fritz","Meta","Urbain","Isaiah","Brina","Polly","Fifi","Rex","Mollee","Allina","Frank","Dasha","Charleen","Roz","Nettle","Giulietta","Hanni","Abigael","Cleve","Tedie","Michelina","Reena","Meghann","Helen","Celestyn","Orlan","Lorianna","Rozalie","Rochella","Ruthie","Marlo","Bernette","Noak","Tatiana","Florida","Winne","Pepe","Nonah","Lucius","Osbert","Rock","Ruthanne","Abby","Joshua","Roxanna","Grant","Elsbeth","Benjamin","Marcille","Milissent","Port","Benoit","Starr","Vito","Lisa","Rozanna","Levey","Yehudit","Terrie","Rhoda","Rourke","Keary","Allan","Banky","Leigh","Hannah","Normie","Michaela","Christalle","Yves","Jonah","Reyna","Gregorio","Paton","Nalani","Barbabas","Marget","Jareb","Barr","Tildi","Stern","Silvana","Lyell","Nolan","Jacqueline","Spike","Clarke","Ivan","Cally","Cheri","Genny","Kris","Gisella","Gennie","Pier","Edwina","Herve","Nickie","Dannie","Corbett","Mallissa","Wileen","Sergio","Lanny","Moise","Laurie","Efren","Lindsay","Sabina","Katerina","Baxy","Margery","Codie","Gabie","Angie","Erda","Augustine","Selig","Waverly","Andie","Merry","Edi","Phineas","Ax","Ange","Tish","Kincaid","Kitty","Barbabas","Tristan","Leopold","Cello","Sean","Alane","Rosanne","Matteo","Bria","Aigneis","Pebrook","Lilllie","Kellen","Tabbie","Gaye","Marni","Gwendolyn","Raphaela","Josy","Timothea","Maddy","Gigi","Renard","Shalne","Tamas","Bradan","Carroll","Mortie","Spencer","Merline","Whittaker","Dav","Jo","Gino","Estella","Merl","Daphna","Phaedra","Wald","Fidela","Isahella","Ginni","Suki","Doria","Bobina","Sebastiano","Malia","Christine","Marsh","Freddie","Kandace","Chrystel","Marysa","Travus","Roberto","Geri","Shaine","Shell","Avis","Shawn","Andriana","Cherianne","Kimberly","Linnie","Grenville","Titos","Lannie","Teddi","Chevalier","Gerri","Kienan","Eldon","Perice","Clarabelle","Elyssa","Ethe","Brit","Annaliese","Cletus","Basilius","Claudell","Marv","Jessie","Olympie","Nichole","Zachary","Celine","Emyle","Hedwiga","Gabrila","Gregorius","Frederick","Cherri","Lowe","Stevy","Nicolais","Franchot","Marilee","Annora","Marketa","Michele","Aurore","Eleonore","Ingeberg","Gard","Jacky","Tamarah","Lisha","Tyrus","Udall","Winonah","Jareb","Christiano","Grange","Jeffry","Trude","Heindrick","Lauralee","Meridel","Molli","Cathryn","Adrian","Ailbert","Baudoin","Florinda","Tova","Sonny","Foss","Prent","Belle","Kali","Franky","Eben","Patrick","Troy","Urbanus","Estrellita","Pet","Ivor","Ginny","Rosanne","Glenden","Judy","Fleming","Koren","Elsey","Minnaminnie","Aeriel","Kaspar","Georg","Toby","Brockie","Briny","Egan","Sutton","Jaye","James","Kipp","David","Lanny","Peggy","Shannen","Brinna","Maryanna","Raimundo","Hilarius","Urbain","Mata","Pren","Audrey","Felipe","Caesar","Clayborn","Sybille","Netty","Waylin","Montgomery","Emanuele","Elena","Artur","Verene","Hettie","Horatia","Marinna","Rory","Betty","Pamella","Annalise","Glynnis","Rubie","Danella","Gabriello","Bekki","Vida","Kristal","Sharyl","Marabel","Ardenia","Stanislaw","Cybil","Adolpho","Dasi","Aline","Hermione","Raynell","Aurelia","Erminie","Anitra","Essy","Davida","Bo","Oliver","Chicky","Patric","Emalia","Rickard","Hannie","Stirling","Victor","Jule","Symon","Anitra","Pansie","Marjie","Cesya","Ermentrude","Netty","Rubina","Evyn","Devlen","Gardiner","Brandais","Diego","Tobe","Tally","Sadie","Friederike","Maribelle","Anatola","Cordie","Murielle","Bryant","Pearle","Noami","Cammy","Maribeth","Klaus","Elfie","Ardath","Orrin","Farrah","Melody","Toinette","Catlaina","Prue","Alysia","Hamil","Gerianne","Korrie","Val","Willi","Evonne","Fern","Rowan","Bevin","Lana","Antone","Reggy","Kalindi","Cori","Jania","Harrietta","Misha","Kerry","Octavia","Jessalyn","Berenice","Ev","Giles","Torr","Lindsy","Dillon","Gwendolin","Juditha","Kerstin","Rozele","Louisa","Orelee","Hilary","Reggie","Ki","Carlie","Will","Inness","Frieda","Aldus","Reidar","Emmett","Dur","Eyde","Shanna","Cynthy","Randene","Angela","Harmonie","Sonny","Eba","Lacee","Marchelle","Jerrilyn","Pansy","Oran","Robenia","Dudley","Juan","Brose","Flossi","Ronald","Melisandra","Eldin","Brian","Bartram","Laverne","Muffin","Alon","Judas","Curran","Ulberto","Johnnie","Idelle","Constance","Rowney","Burty","Alameda","Selle","Jobyna","Joya","Datha","Rand","Beau","Ronnie","Renault","Andee","Blake","Christal","Donna","Ingram","Gustav","Sibyl","Carline","Nelson","Midge","Taylor","Lavinie","Sharl","Candra","Lukas","Farah","Leonelle","Reggie","Wilbur","Celinka","Daron","Maximilianus","Konstanze","Gayel","Stanleigh","Gayle","Baxter","Silva","Rici","Netta","Suzette","Appolonia","Boycie","Kaleena","Vevay","Wilden","Winna","Patience","Rafaellle","Maighdiln","Paulie","Herculie","Jessie","Querida","Linzy","Duke","Teriann","Shaylyn","Carmine","Marylou","Benedick","Ania","Penny","Brewer","Candice","Jens","Leupold","Novelia","Nonie","Bili","Harrison","Saxon","Gearalt","Kalil","Kirbie","Donall","Stephine","Briano","Colline","Carmine","Joelie","Milli","Anabel","Gare","Ryon","Biddy","Rustie","Adria","Jobi","Margarete","Hilde","Bill","Rozelle","Terrence","Alfy","Hetty","Anastasie","Maxy","Lana","Maison","Antonino","Michael","Molli","Jacquette","Biddie","Tod","Mohandis","Homer","Giorgio","Lotta","Ford","Aimil","Yorker","Jobyna","Chaim","Currey","Zarla","Fraze","Kimmi","Rorie","Braden","Denver","Janella","Chryste","Elspeth","Bernadine","Gifford","Delmore"];
  var lNameArray = ["Lakeland","Beahan","Makin","Grenshiels","Lodo","Staniland","Gauler","Elwell","Swalough","Martin","Walkley","Segebrecht","Felderer","Hearnden","Hannabus","Mariner","Haisell","Heardman","Hawkswell","Bagge","Livsey","Linscott","Cadamy","Ormiston","Luxton","Charlotte","McDavitt","Lortzing","Macia","McGrirl","Roubert","Branigan","Reyna","Quinet","Copestick","Cobley","Hearnshaw","Bridgen","De Luna","Buffy","Chong","Trevithick","Shortland","MacAskill","Ornelas","Battams","Hurles","Rogez","Lonsdale","Ebbers","Thomesson","Abercromby","Kiddell","Fury","Pheasant","McMenamie","O'Lenechan","Huddle","Noquet","Turpin","Nassy","Yerill","Dowglass","Erickssen","Havesides","Vanacci","Ladel","Escritt","Barajaz","Brownell","Sedgmond","Corriea","Bretelle","Doby","Willman","Arunowicz","Halston","Abrehart","Boddymead","Mollett","Branney","Orsay","Janway","Rozzell","Fache","Elcom","MacAllister","Highnam","Grzeszczak","Keave","Cavey","Rizzetti","Brims","Parkins","Songhurst","Ruffles","Davana","Adaway","de la Valette Parisot","Kuhlen","Crinkley","Kenner","Aitken","Petry","Toope","Maskell","Shenton","Lambshine","Romer","Latta","Tonsley","Shevelin","Machan","Sanbroke","Grindell","Chidgey","Hawtrey","Wigfield","Peeter","Brickwood","Ambrogelli","Galiford","Chason","Josh","Tees","Ussher","MacCallion","Crosfield","MacDermand","Walton","Tape","Clapperton","Guidera","Chinnock","Yele","Karlicek","Hampton","Blankley","Foucher","Coger","Bedbrough","Dennick","Allsworth","Dumbar","Spencer","Doodney","Haythornthwaite","Carnow","Lowey","Ockenden","Brucker","Duchenne","Stut","MacDwyer","Dradey","Meiner","Chamberlayne","Roadnight","Enticknap","Hemmingway","Gallyhaock","Stidson","Jeratt","Ceaser","Birtchnell","Radmer","McArtan","Elesander","Dwerryhouse","Lilloe","Wissbey","Schaffel","Rennick","Jochanany","Cowern","Wickrath","Diehn","Rawet","Koles","Aindrais","Ambroz","Torrejon","Tissier","Bambery","Thredder","Ibanez","Mabey","Sigmund","Eves","Pym","Windows","Hendrick","Emerine","Smouten","Lulham","Lasty","Pagelsen","Matevushev","Eschalotte","Bock","Semon","Lummus","Gerish","Loft","Maddie","Eyrl","Hubane","Broe","Sofe","Mingey","Kohneke","Jonah","Leethem","Pounder","Gouny","Lavin","Rapsey","Baselio","Abbay","Bailes","Merritt","Ockwell","Scawn","Cherryman","Josilevich","Gipp","Legon","Durbann","Kirckman","Tremlett","Ickovici","Behning","Jolliffe","Anderbrugge","Imlock","Newrick","Withur","Beswick","Choppen","Neno","Kennea","Stanion","Kuhn","Humes","Gilderoy","Wraighte","Remon","Whaymand","Dengate","Benediktovich","Cyphus","Govinlock","Chisolm","Stuck","Hastwall","Duddy","Devons","Weild","Hesey","MacColgan","O' Ronan","Shipsey","Browell","Seagar","McAviy","Faires","Cawker","Bordis","Wardhaw","Abramow","Fairlam","Besse","Edelston","Goodbody","McLenaghan","Jeffcoate","Dislee","Eagger","Darragon","Bliben","Scotney","Schooling","MacCrann","Kubyszek","Linthead","Bygott","Seckington","Hayley","Piscopiello","Petit","Foxcroft","Iacovielli","Eayres","Roney","Bredbury","Bazeley","Skentelbury","Wandrack","Fonso","Hurton","Tatford","Vawton","Wolsey","Plaister","Pettersen","Aguirre","Saulter","Spencer","Listone","Lettington","Glenny","Keast","Webborn","Jehaes","Stiger","Brocklesby","Aspall","Normanville","Enstone","Bankhurst","Toderbrugge","Garstang","Spurett","Fitzsymon","Dawkes","Bastin","Bendin","Kline","Vermer","Overlow","Kesteven","Affleck","Branney","Yearnes","Cushion","Kemson","Penberthy","Fidgeon","Layne","Carey","Cosins","Duckhouse","Morat","Springer","Houchin","Piburn","Swains","Lightning","Dannett","Wankel","Kinson","Bredgeland","Quickenden","Iacopo","Brickett","Daglish","Hallitt","Scranny","Gabe","Blann","Brou","Hembry","Morphew","Sturgess","Sawtell","Grogor","Gilder","Relfe","Mahedy","De Ruggero","Ginni","Ickovits","Legen","Swyne","Beaudry","Labusch","Hundley","Lambis","Wiper","Staite","Domenichelli","Myatt","Rivilis","Marchington","Brombell","Canedo","Santos","Nowlan","Pacher","Iles","McGaughay","Gullivent","Hickford","Vigus","Curuclis","Garrique","Fairbank","McLarnon","Watkiss","Evanson","Billes","Kupec","de Nore","Swarbrigg","Bryer","Fideler","McChruiter","Hawkings","Trillow","Tapper","Meeson","Sheer","Godsmark","Youell","Oakley","Birchall","Fulton","Blades","Lambot","Cicci","Peres","Buckler","O'Scannill","Stubbins","Kares","Omond","Groneway","Tweedie","Thornthwaite","Gally","Hintzer","Yeskov","Russam","Kasper","Haselwood","Tesdale","Abel","Greenroad","Ternent","Lettley","Fullun","Walcar","Eric","Blainey","Gerding","Lawdham","Sandland","Gerin","Pagon","Padberry","Kilgrew","Credland","Kidd","Wallwood","Moehler","Scrine","Giraudeau","Rossbrooke","Muttitt","Willshee","Dunster","Ilsley","Ginnane","Kestin","Fedynski","Banasevich","Wabersinke","Pride","Farney","Marquese","Matis","Konzel","Forsdike","Britner","Mosedill","Bradneck","Cohalan","Zoren","Gaiford","Ranken","Basile","Rintoul","Drage","McKinn","Ravenscroftt","Stanbro","Mosdell","Dumberell","Sparrowhawk","Bellefant","Emanulsson","Pavinese","Mathey","Garralts","Mugridge","Pawson","Duprey","Hearon","Thundercliffe","Oliveti","Dunmuir","Wyett","Lumsden","Nozzolinii","Gunnell","Banaszczyk","Giovannacci","Frunks","Gatsby","Turfus","Slimm","Andersen","Heak","Kunat","Megroff","Bickerdike","Valance","Mayoh","Braunston","Gillbe","Kingswood","Wallas","Sawforde","Adam","Dowda","Garrud","Birchall","Dingsdale","Board","Siccombe","Canadas","Axell","Wallsam","Colleford","Brettoner","Haseley","Wileman","Hadkins","McCaghan","Kepling","Folan","Claffey","Nuccitelli","Aspel","Shouler","Boulger","Bastie","Petrello","Faux","Ruseworth","Burkert","Shekle","Risson","Birts","Handover","Heggison","Dymott","Scrivinor","Saben","Vezey","Mathey","Slisby","Truggian","Wride","Janko","Dunsford","Martinelli","Buckell","Gudgin","Dowsett","Noonan","Veldman","Titterell","Wallbrook","Swigger","Hessenthaler","Schlagtmans","Chaldecott","Hatch","Comi","Cerro","Habble","Strotone","Bromley","Manilow","Spellissy","Salway","Beels","Lamprey","Echallier","Rowatt","Neubigging","Halden","Haith","Ambrogi","Poznan","Wilstead","Giller","M'Chirrie","Basant","Melmeth","Bruhnke","Nund","Morrid","O'Hanlon","Banton","Houseago","Hullah","Barge","Breckell","Domanski","Cone","Lindemann","Elsley","Buckingham","Tassel","Bulward","de Almeida","Renshell","Currin","Melley","Stallon","McEvon","Moakson","Castanho","Russon","Holbarrow","Winman","Newing","Apted","Trimming","Hinzer","Elstone","Berka","Romero","Nugent","Tomczykowski","Clausson","Koene","Pitford","Manjot","Stanway","Dominka","Sailor","Rummings","Vidgen","O'Bruen","Galey","Mengue","Trulocke","Lardnar","Aronson","Tryme","Spawforth","Dickons","Cupitt","Wozencraft","Springall","Crafter","Cawt","Dreye","Stowte","Castane","Bech","Seiter","Mourant","Labadini","Rubinsztein","Wombwell","Gribben","Salt","Selby","Renac","Folliss","Morat","Mawby","Arnholdt","Bartosek","Giff","Dymick","Ottewell","D'Onisi","Champagne","Willford","Mechell","Attfield","Benning","Cranstoun","Osbiston","Gorce","Philipart","Egell","Keyzor","Bere","Batsford","Ansett","Georgeon","Adnams","Jessard","Carabet","Luetkemeyers","Layzell","Shackell","McIlriach","Blay","Boniface","Kensall","Joselevitch","Garey","Moodycliffe","Hanstock","Dacombe","Brehaut","Mechic","Atlee","Loody","Godridge","Weerdenburg","Minguet","Crooks","Fiddymont","Sushams","Oels","Marshall","Northeast","Josephy","Cammomile","Wringe","Harbar","Care","Naulls","Farrens","McCoid","Cowherd","Marrows","Valente","Aitkin","Simmill","Ackers","Hunnicutt","Brickner","Cartman","Organer","Vedenichev","Josifovic","Lestor","Gianasi","Darby","Dunniom","Dominico","Blampey","Greensall","Tierney","Blackborough","Crippes","Biesinger","Bresnahan","Cushworth","Southard","Reinisch","Haucke","Burston","Ghiraldi","Hancill","Gohn","Prosh","Maggorini","Monni","Lamswood","Lince","Featherstonhalgh","Mulcahy","Napper","Bruin","Welden","Doget","Tackell","Quilligan","McMeyler","Mapplebeck","Horbath","Boness","Ohm","Cowsby","Magnay","Colpus","Hemerijk","Sorsby","Yushmanov","Reeder","Tettersell","Rattery","Porcas","Hadlee","Snasdell","Cowwell","Gullis","Mundford","Patnelli","Cianelli","Rucklidge","Marvel","Dionsetto","Doerrling","Merman","Regorz","Jeune","Littlecote","Bilston","Allanby","Whitbread","Harral","Pardy","Dillingston","Brick","Baunton","Armatys","Pillifant","Filip","Bouzek","Beare","McGonagle","Guyonnet","Cutchey","Broinlich","Impson","Port","Yeliashev","O'Keeffe","Pensom","Biddwell","Briereton","Buttle","Romeril","Hairsine","Jantet","Heintzsch","Cornwall","Pack","Dahlberg","Helling","Anker","Small","Hynson","Larciere","Paynton","Raund","Elegood","Boatwright","Zolini","Geillier","Witherop","Tootell","Woolam","Normanville","Pawel","Pannaman","Baylie","Pindar","Jeacocke","Capstack","Lazer","Watkiss","Boullin","Gorring","Russe","Izzatt","Langrick","Vedenyapin","Meigh","Braybrookes","Alti","Heasman","Sarjant","Brody","Wallbank","Frier","Dugdale","Terrans","Ticksall","Stoffler","Peters","Millthorpe","Usmar","Kernaghan","Gowar","Worboy","Bunn","Harvison","Lightbourne","Fisby","Ricciardello","Wisbey","Colquhoun","Fyfield","Bremmer","Gokes","Symcock","Pellitt","Heinert","Farnish","Harper","Blight","Spadotto","Creaney","Danielovitch","Larner","Akers","Vedyashkin","Hortop","Ratter","Beldham","Gresty","Plummer","Crannell","Cowland","Raiston","Kringe","McCumesky","Graalman","Frostick","Mesias","Abdey","Tellenbrok","Shirrell","Pranger","Petrelli","Knappett","De Vaan","Hritzko","Growden","Andrusov","Demare","Grishakov","Goom","Mahon","Stollen","Neubigging","Allberry","Spinello","Chavey","Flacknoe","MacKenzie","Lerner","Piwell","Syseland","Ashforth","Garstang","Garstang","Echalie","Obert","Pollok","Titheridge","Dmitrienko","Tonna","Dulwitch","Treweek","Elland","Katte","Dellow","Anniwell","Heustice","Callister","Abrahamsen","Hindshaw","Rittmeyer","Paynter","Ferrers","Waldera","Drayton","Scoles","Enticott","O'Reagan","Morshead","Uc","Clatworthy","Rickwood","Macquire","Sworne","Grigoli","Sloyan","Yeskin","Dayment","Borris","Philipsson","Spritt","Ellingford","Surgener","Manton","Jaggers","O'Dowgaine","Tackett","McCarron","Iapico","Franceschielli","Mathwin","Desaur","Dishman","Rosander","Willetts"]
        
  fNameInput = document.getElementById("firstNameInput");
  lNameInput = document.getElementById("lastNameInput");
  
function autofill(inp, nameArray){
    inp.addEventListener("input", () => {
    
    clearContainer();
    //create container for matching strings
    container = document.createElement("div");
    container.setAttribute("id", this.id + "_autofill_container");
    container.setAttribute("class", "autofill_container");
    
    inp.parentNode.insertBefore(container, inp.nextSibling);
    
    val = inp.value;

    var filtArray = fNameArray.filter( el => el.toLocaleLowerCase().startsWith(val.toLocaleLowerCase()) )

    filtArray.forEach( el => {
        var subContainer = document.createElement("div");
        subContainer.innerHTML = ("<strong>" + el.substr(0, val.length) + "</strong>");
        subContainer.innerHTML += el.substr(val.length);
        container.appendChild(subContainer);
        subContainer.addEventListener("click",() => {
            inp.value = subContainer.innerText
            clearContainer();
        })
    })
})

function clearContainer(){
    var container = document.getElementsByClassName("autofill_container");
    Array.from(container).forEach(el=>el.parentNode.removeChild(el))
}

document.addEventListener( "click", clearContainer )
}

autofill(fNameInput, fNameArray);
autofill(lNameInput, lNameArray);

// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
