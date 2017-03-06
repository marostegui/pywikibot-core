<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <title>Wikimedia Error</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="author" content="Mark Ryan, with translation by many people; see http://meta.wikimedia.org/wiki/Multilingual_error_messages"/>
  <meta name="copyright" content="(c) 2005-2007 Mark Ryan and others. Text licensed under the GNU Free Documentation License. http://www.gnu.org/licenses/fdl.txt"/>

  <style type="text/css"><!--
   body {
     background-color: #dbe5df;
     font-family: "Gill Sans MT", "Gill Sans", "Trebuchet MS", Helvetica, sans-serif;
     margin-left: 0px;
     margin-right: 0px;
    }
   .TechnicalStuff {
     font-style: italic;
     text-align: center;
     font-size: 0.8em;
     padding-bottom: 0.8em;
    }
   .BottomStrip {
     background: #9fbfd8;
     text-align: center;
     font-size: 0.85em;
    }
   .RightToLeft {
     direction: rtl;
    }
   .Lines {
     width: 100%;
     height: 1px;
     overflow: hidden;
     font-size: 0.5px;
    }
   .ContentArea {
     background-color: white;
     padding-left: 10%;
     padding-right: 10%;
     padding-top: 0.8em;
     font-size: 1.0em;
    }
   a:hover {
     color: red;
    }
   a.BottomLinks {
     color: #000000;
     text-decoration: none;
    }
   a.BottomLinks:hover {
     color: red;
     text-decoration: none;
    }
   h1, h2 {
     margin: 0px;
     font-size: 1.0em;
    }
   h3.LanguageHeading {
     font-weight: bold
    }
   #ErrorTitleDiv {
     background: #9fbfd8;
     font-size: 1.2em;
     font-weight: bold;
     text-align: center;
    }
   #FoundationNameDiv {
     background: #dbe5df;
     font-size: 1.5em;
     font-family: "Gill Sans MT", "Gill Sans", Helvetica, Humanist, sans-serif;
     font-weight: bold;
     text-transform: uppercase;
     text-align: center;
     width: 100%;
     padding-top:0.8em;
    }
   #TopLinks {
     text-align: center;
     font-size: 0.8em
    }
   -->
  </style>

  <script type="text/javascript"><!-- Begin

   // The first column of this array is for the local language name of the Wikimedia Foundation
   // ('Wikimedia Foundation' should be used for all Latin-based languages)
   // The second column of the array is the localised language word for 'Error'.
   var LanguageDetails = new Array();
   LanguageDetails['ar'] = new Array( "مؤسسة ويكيميديا", "خطأ" );
   LanguageDetails['cs'] = new Array( "Wikimedia Foundation", "Chyba" );
   LanguageDetails['da'] = new Array( "Wikimedia Foundation", "Fejl" );
   LanguageDetails['de'] = new Array( "Wikimedia Foundation", "Fehler" );
   LanguageDetails['el'] = new Array( "Ίδρυμα Wikimedia", "Σφάλμα" );
   LanguageDetails['en'] = new Array( "Wikimedia Foundation", "Error" );
   LanguageDetails['es'] = new Array( "Wikimedia Foundation", "Error" );
   LanguageDetails['et'] = new Array( "Wikimedia Foundation", "Viga" );
   LanguageDetails['fa'] = new Array( "بنیاد ویکی‌مدیا", "خطا" );
   LanguageDetails['fi'] = new Array( "Wikimedia Foundation", "Virhe" );
   LanguageDetails['fr'] = new Array( "Wikimedia Foundation", "Erreur" );
   LanguageDetails['he'] = new Array( "קרן ויקימדיה", "שגיאה" );
   LanguageDetails['id'] = new Array( "Wikimedia Foundation", "Error" );
   LanguageDetails['it'] = new Array( "Wikimedia Foundation", "Errore" );
   LanguageDetails['ja'] = new Array( "ウィキメディア財団", "エラー" );
   LanguageDetails['ko'] = new Array( "위키미디어 재단", "오류" );
   LanguageDetails['no'] = new Array( "Wikimedia Foundation", "Feil" );
   LanguageDetails['nl'] = new Array( "Wikimedia Foundation", "Fout" );
   LanguageDetails['pl'] = new Array( "Wikimedia Foundation", "Błąd" );
   LanguageDetails['pt'] = new Array( "Wikimedia Foundation", "Erro" );
   LanguageDetails['ro'] = new Array( "Wikimedia Foundation", "Eroare" );
   LanguageDetails['ru'] = new Array( "Фонд Викимедиа", "Ошибка" );
   LanguageDetails['sr'] = new Array( "Задужбина Викимедија", "Грешка" );
   LanguageDetails['sv'] = new Array( "Wikimedia Foundation", "Fel" );
   LanguageDetails['th'] = new Array( "มูลนิธิวิกิมีเดีย", "เกิดความผิดพลาด" );
   LanguageDetails['tr'] = new Array( "Wikimedia Foundation", "Hata" );
   LanguageDetails['vi'] = new Array( "Wikimedia Foundation", "Lỗi" );
   LanguageDetails['zh-Hant'] = new Array( "維基媒體基金會", "錯誤" );
   LanguageDetails['zh-Hans'] = new Array( "维基媒体基金会", "错误" );

   function ShowLanguage(WhichLanguage){

     // Set the localised language version of the Wikimedia Foundation heading and page title
     document.getElementById('FoundationName').innerHTML = LanguageDetails[WhichLanguage][0]
     document.title = LanguageDetails[WhichLanguage][1] + ' - ' + LanguageDetails[WhichLanguage][0]

     // Set the localised language version of the heading word for 'error'
     document.getElementById('ErrorName').innerHTML = LanguageDetails[WhichLanguage][1]

     for (var LanguageAbbr in LanguageDetails) {

      // The following arrangement attempts to minimise the number of document modifications made when switching languages

      if (LanguageAbbr != WhichLanguage && document.getElementById(LanguageAbbr).style.display == '') {
        // This bit kicks in for each inactive language during the initial page collapse, and on a language when switching away from that language
        document.getElementById(LanguageAbbr).style.display = 'none' // hide the inactive language section
        document.getElementById(LanguageAbbr + '_link').style.fontWeight = '' //unbolden its language link
        document.getElementById(LanguageAbbr + '_head').style.display = 'none' // hide its language heading
       }
      else if (LanguageAbbr == WhichLanguage && document.getElementById(LanguageAbbr).style.display == 'none') {
        // This bit kicks in for the new active language only when switching to it from a different language (i.e. not during initial page collapse)
        document.getElementById(WhichLanguage).style.display = '' // show the active language section
        document.getElementById(WhichLanguage + '_link').style.fontWeight = 'bold' // bolden the active language link
       }
      else if (LanguageAbbr == WhichLanguage && document.getElementById(LanguageAbbr).style.display == '') {
        // This bit kicks in during initial page collapse with the active language, and when you attempt to switch to the currently-visible language
        document.getElementById(WhichLanguage + '_link').style.fontWeight = 'bold' // bolden the active language link
        document.getElementById(LanguageAbbr + '_head').style.display = 'none' // hide its language heading
       }

     }


    }

   function Startup(){

     // Hide the top links bar, which is only there for navigation when there's no javascript
     document.getElementById('TopLinks').style.display = 'none'

     // Look at the current URL, and if it matches an available language, show that. E.g. fr.wiktionary.org -> show 'fr'
     var CurrentLocation = new String(window.location.href)
     var CurrentSubdomain = CurrentLocation.slice(CurrentLocation.lastIndexOf('//') + 2, CurrentLocation.indexOf('.'))
     for (var LanguageAbbr in LanguageDetails) {
       if (LanguageAbbr == CurrentSubdomain) {
         ShowLanguage(LanguageAbbr);
         return;
        }
      }

     // If it is a hyphenated language code in the URL, try to go to its root language
     if (CurrentSubdomain.indexOf('-') != -1) {
       var RootLanguage = CurrentSubdomain.slice(0, CurrentSubdomain.indexOf('-'))
       for (var LanguageAbbr in LanguageDetails) {
         if (LanguageAbbr == RootLanguage) {
           ShowLanguage(LanguageAbbr);
           return;
          }
        }
      }

     // If it's secure.wikimedia.org, look later in the URL for the language code
     if (CurrentSubdomain == 'secure') {
       var SecureSubdomain = CurrentLocation.split('/')
       for (var LanguageAbbr in LanguageDetails) {
         if (LanguageAbbr == SecureSubdomain[4]) {
           ShowLanguage(LanguageAbbr);
           return;
          }
        }
      }

     // Attempt to detect the user's browser or system language using browser-specific methods, and use that if it matches an available language
     if (navigator.userLanguage) var language = navigator.userLanguage // use the user's preferred language (non-Gecko)
     else if (navigator.appName == 'Netscape') var language = navigator.language // use the only language information available to Gecko
     else var language = navigator.browserLanguage // get the browser language information in non-Gecko browsers (IE, Opera, Konqueror)
     // Compare the returned language against the list of languages on the error page
     for (var LanguageAbbr in LanguageDetails) {
       if (language.indexOf(LanguageAbbr) != -1) {
         ShowLanguage(LanguageAbbr);
         return;
        }
      }

     // Show English as a fail-all
     ShowLanguage('en');

    }

   function RefreshPage(){

     // Refresh the page, preferably from cache, upon someone clicking 'try again'
     window.location.reload(false)

    }

   // End -->
  </script>

 </head>

 <body link="#24442E" text="#000000" vlink="#24442E" alink="#FF0000" onload="Startup();">

  <!-- Wikimedia Foundation title -->
  <div id="FoundationNameDiv">
   <h1 id="FoundationName">Wikimedia Foundation</h1>
  </div>

  <!-- Shadow-style gradient -->
  <div class="Lines" style="background-color:#ccd4cf;"></div>
  <div class="Lines" style="background-color:#bdc3bf;"></div>
  <div class="Lines" style="background-color:#adb1af;"></div>
  <div class="Lines" style="background-color:#9ea09f;"></div>
  <div class="Lines" style="background-color:#dbe5df;"></div>

  <!-- 'Error' title -->
  <div id="ErrorTitleDiv">
   <h2 id="ErrorName">Error</h2>
  </div>

  <!-- This section of language links shows at the top of the page for navigation only when javascript is not available. -->
  <div id="TopLinks">

   <!-- Shadow-style gradient -->
   <div class="Lines" style="background-color:#9d9fa1;"></div>
   <div class="Lines" style="background-color:#a8aeb4;"></div>
   <div class="Lines" style="background-color:#b4bec6;"></div>
   <div class="Lines" style="background-color:#c0ced8;"></div>

   <a href="#Arabic" class="BottomLinks" onclick="ShowLanguage('ar')">العربية</a>
   <a href="#Indonesian" class="BottomLinks" onclick="ShowLanguage('id')">Bahasa Indonesia</a>
   <a href="#Czech" class="BottomLinks" onclick="ShowLanguage('cs')">Česky</a>
   <a href="#Danish" class="BottomLinks" onclick="ShowLanguage('da')">Dansk</a>
   <a href="#German" class="BottomLinks" onclick="ShowLanguage('de')">Deutsch</a>
   <a href="#Estonian" class="BottomLinks" onclick="ShowLanguage('et')">Eesti</a>
   <a href="#Greek" class="BottomLinks" onclick="ShowLanguage('el')">Ελληνικά</a>
   <a href="#English" class="BottomLinks" onclick="ShowLanguage('en')">English</a>
   <a href="#Spanish" class="BottomLinks" onclick="ShowLanguage('es')">Español</a>
   <a href="#Persian" class="BottomLinks" onclick="ShowLanguage('fa')">فارسی</a>
   <a href="#French" class="BottomLinks" onclick="ShowLanguage('fr')">Français</a>
   <a href="#Hebrew" class="BottomLinks" onclick="ShowLanguage('he')">עברית</a>
   <a href="#Italian" class="BottomLinks" onclick="ShowLanguage('it')">Italiano</a>
   <a href="#Japanese" class="BottomLinks" onclick="ShowLanguage('ja')">日本語</a>
   <a href="#Korean" class="BottomLinks" onclick="ShowLanguage('ko')">한국어</a>
   <br/>
   <a href="#Dutch" class="BottomLinks" onclick="ShowLanguage('nl')">Nederlands</a>
   <a href="#Norwegian" class="BottomLinks" onclick="ShowLanguage('no')">Norsk (Bokmål)</a>
   <a href="#Polish" class="BottomLinks" onclick="ShowLanguage('pl')">Polski</a>
   <a href="#Portuguese" class="BottomLinks" onclick="ShowLanguage('pt')">Português</a>
   <a href="#Romanian" class="BottomLinks" onclick="ShowLanguage('ro')">Română</a>
   <a href="#Russian" class="BottomLinks" onclick="ShowLanguage('ru')">Русский</a>
   <a href="#Serbian" class="BottomLinks" onclick="ShowLanguage('sr')">Српски</a>
   <a href="#Finnish" class="BottomLinks" onclick="ShowLanguage('fi')">Suomi</a>
   <a href="#Swedish" class="BottomLinks" onclick="ShowLanguage('sv')">Svenska</a>
   <a href="#Thai" class="BottomLinks" onclick="ShowLanguage('th')">ไทย</a>
   <a href="#Vietnamese" class="BottomLinks" onclick="ShowLanguage('vi')">Tiếng Việt</a>
   <a href="#Turkish" class="BottomLinks" onclick="ShowLanguage('tr')">Türkçe</a>
   <a href="#TraditionalChinese" class="BottomLinks" onclick="ShowLanguage('zh-Hant')">繁體中文</a>
   <a href="#SimplifiedChinese" class="BottomLinks" onclick="ShowLanguage('zh-Hans')">简体中文</a>
  </div>

  <!-- Shadow-style gradient -->
  <div class="Lines" style="background-color:#8f8f8f"></div>
  <div class="Lines" style="background-color:#acacac"></div>
  <div class="Lines" style="background-color:#c6c6c6"></div>
  <div class="Lines" style="background-color:#dbdbdb"></div>
  <div class="Lines" style="background-color:#eaeaea"></div>
  <div class="Lines" style="background-color:#f4f4f4"></div>


  <!-- BEGIN CONTENT AREA -->
  <div class="ContentArea">

   <div id="en" lang="en">
    <h3 id="en_head" class="LanguageHeading">
     <a name="English">English</a>
    </h3>
	<p>Our servers are currently experiencing a technical problem. This is probably temporary and should be fixed soon. Please <a href="javascript:" onclick="RefreshPage(); return false">try again</a> in a few minutes.</p>
    <p>You may be able to get further information in the <a href="irc://chat.freenode.net/wikipedia">#wikipedia</a> channel on the <a href="//www.freenode.net">Freenode IRC network</a>.</p>
    <p>The Wikimedia Foundation is a non-profit organisation which hosts some of the most popular sites on the Internet, including Wikipedia. It has a constant need to purchase new hardware. If you would like to help, please <a href="//wikimediafoundation.org/wiki/Fundraising">donate</a>.</p>
    <hr noshade="noshade" size="1px" width="80%" />
    <div class="TechnicalStuff">
     If you report this error to the Wikimedia System Administrators, please include the details below.<br/>
    </div>
   </div>

   <div id="ar" lang="ar" class="RightToLeft">
    <div id="ar_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Arabic">
       العربية
      </a>
     </h3>
    </div>
    <p>تواجه خوادمنا الآن مشاكل تقنية. هذا في الأغلب بشكل مؤقت ومتوقع إصلاحه قريبا. من فضلك <a href="javascript:" onclick="RefreshPage(); return false">عاود التحميل</a> بعد دقائق قليلة.</p>
    <p>يمكنك الحصول على معلومات أكثر في <a href="irc://irc.freenode.net/wikipedia">#ويكيبيديا</a> على <a href="//www.freenode.net/">شبكة الآي‌آر‌سي فري‌نود</a>.</p>
    <p>مؤسسة ويكيميديا والتي تستضيف بعضا من أشهر مواقع الإنترنت مثل ويكيبيديا الموسوعة الحرة، هي منظمة غير هادفة للربح. تحتاج المنظمة دائما عتاد جديد للحاسوب بشكر مستمر فإن أردت المساعدة، من فضلك <a href="//wikimediafoundation.org/wiki/%D8%AC%D9%85%D8%B9_%D8%AA%D8%A8%D8%B1%D8%B9%D8%A7%D8%AA">تبرع لأجل منظمة ويكيميديا</a>.</p>
    <hr noshade="noshade" size="1px" width="80%" />
    <div class="TechnicalStuff" style="font-style:normal">
     إذا أردت إبلاغ هذا الخطأ إلى إداريي ويكيميديا، من فضلك ضمن التفاصيل بالأسفل.<br/>
    </div>
   </div>

   <div id="cs" lang="cs">
    <div id="cs_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Czech">
       Česky
      </a>
     </h3>
    </div>
    <p>Naše servery mají momentálně technické problémy. Pravděpodobně se jedná o dočasnou závadu, která by měla být brzy opravena. Prosíme, zkuste za několik minut <a href="javascript:" onclick="RefreshPage(); return false">stránku nahrát znovu</a>.</p>
    <p>Další informace lze získat na IRC kanálu <a href="irc://chat.freenode.net/wikipedia-cs">#wikipedia-cs</a> v <a href="//www.freenode.net">síti FreeNode</a>.</p>
    <p>Wikimedia Foundation je nezisková organizace, která spravuje některé z nejpopulárnějších serverů na internetu, včetně Wikipedie. Neustále potřebuje nakupovat nové hardwarové vybavení. Pokud byste chtěli pomoct, <a href="//wikimediafoundation.org/wiki/Sponzorstv%C3%AD">přispějte</a>.</p>
    <hr noshade="noshade" size="1px" width="80%" />
    <div class="TechnicalStuff">
     Pokud hlásíte tuto chybu administrátorům systémů Wikimedia, prosíme připojte následující podrobnosti.<br/>
    </div>
   </div>

   <div id="da" lang="da">
    <div id="da_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Danish">
       Dansk
      </a>
     </h3>
    </div>
    <p>Wikimedia Foundations servere har i øjeblikket tekniske problemer. <a href="javascript:" onclick="RefreshPage(); return false">Prøv venligst igen</a> om få minutter.</p>
    <p>For nærmere information kan du besøge <a href="//www.freenode.net">FreeNode</a> IRC kanalen <a href="irc://chat.freenode.net/wikipedia-da">#wikipedia-da</a>.</p>
    <p>Hvis du er interesseret i at hjælpe nonprofitorganisationen Wikimedia, så <a href="//wikimediafoundation.org/wiki/Indsamling">giv et bidrag</a> i dag.</p>
    <hr noshade="noshade" size="1px" width="80%" />
    <div class="TechnicalStuff">
     Hvis du rapporterer denne fejl til Wikimedias systemadministratorer, så vedlæg venligst de detaljerede oplysninger herunder.<br/>
    </div>
   </div>

   <div id="de" lang="de">
    <div id="de_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="German">
       Deutsch
      </a>
     </h3>
    </div>
    <p>Bei den Servern der Wikimedia Foundation sind gerade technische Probleme aufgetreten. Bitte versuche es in ein paar Minuten <a href="javascript:" onclick="RefreshPage(); return false">noch einmal</a>.</p>
    <p>Genauere Informationen gibt es im Channel <a href="irc://chat.freenode.net/wikipedia-de">#wikipedia-de</a> des IRC-Netzwerkes <a href="//www.freenode.net">Freenode</a>.</p>
    <p>Wenn du Wikimedia Deutschland e.V. und der Wikimedia Foundation helfen möchtest, kannst du dies mit <a href="//wikimediafoundation.org/wiki/Spenden">einer Spende</a> tun.</p>
    <hr noshade="noshade" size="1px" width="80%" />
    <div class="TechnicalStuff">
     Wenn du einem Wikimedia-Systemadministrator diesen Fehler meldest, gib bitte die folgenden Details an.<br/>
    </div>
   </div>

   <div id="el" lang="el">
    <div id="el_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Greek">
       Ελληνικά
      </a>
     </h3>
    </div>
    <p>Οι διακομιστές μας αυτή την στιγμή παρουσιάζουν ένα τεχνικό πρόβλημα. Αυτό είναι πιθανά προσωρινό και θα διορθωθεί σύντομα. Παρακαλούμε <a href="javascript:" onclick="RefreshPage(); return false">δοκιμάστε ξανά</a> σε λίγα λεπτά.</p>
    <p>Μπορεί να λάβετε περισσότερες πληροφορίες στο κανάλι <a href="irc://chat.freenode.net/wikipedia">#wikipedia</a> στο <a href="//www.freenode.net">δίκτυο IRC Freenode</a>.</p>
    <p>Το Ίδρυμα Wikimedia είναι ένας μη κερδοσκοπικός οργανισμός που φιλοξενεί ορισμένους από τους πιο δημοφιλής ιστότοπους στο διαδίκτυο συμπεριλαμβάνοντας την Βικιπαίδεια. Βρίσκεται σε μόνιμη ανάγκη αγοράς νέου hardware. Εάν θέλετε να βοηθήσετε παρακαλούμε <a href="//wikimediafoundation.org/wiki/Δωρεές">κάντε μια δωρεά</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Εάν αναφέρετε αυτό το σφάλμα στου Διαχειριστές Συστημάτων του Wikimedia, παρακαλούμε συμπεριλάβετε τις παρακάτω πληροφορίες.<br/>
    </div>
   </div>

   <div id="es" lang="es">
    <div id="es_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Spanish">
       Español
      </a>
     </h3>
    </div>
    <p>Los servidores de la Fundación Wikimedia están teniendo dificultades técnicas. Este problema es temporal y esperamos arreglarlo cuanto antes. Por favor intenta <a href="javascript:" onclick="RefreshPage(); return false">acceder nuevamente</a> dentro de unos minutos.</p>
    <p>Puedes obtener más información en el canal <a href="irc://chat.freenode.net/wikipedia-es">#wikipedia-es</a> de la red IRC <a href="//www.freenode.net">FreeNode</a>.</p>
    <p>La Fundación sin ánimo de lucro Wikimedia aloja algunos de los sitios más visitados en Internet, incluyendo Wikipedia, y necesita comprar hardware nuevo constantemente. Si deseas ayudarnos, haz por favor <a href="//wikimediafoundation.org/wiki/Donaciones">una donación</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Si informas de este error a los administradores del sistema, por favor indica los detalles siguientes.<br/>
    </div>
   </div>

   <div id="et" lang="et">
    <div id="et_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Estonian">
       Eesti
      </a>
     </h3>
    </div>
    <p>Wikimedia Sihtasutuse serveris on viga. Palun <a href="javascript:" onclick="RefreshPage(); return false">proovi uuesti</a>.</p>
    <p>Lisa infot võid saada kanalist <a href="irc://chat.freenode.net/wikipedia">#wikipedia</a> <a href="//www.freenode.net">FreeNoden IRC-võrgust</a>.</p>
    <p>Kui soovite mittetulunduslikku Wikimedia Sihtasutust aidata, siis palun <a href="//wikimediafoundation.org/wiki/Annetused">tehke annetus</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Kui teatate sellest veast Wikimedia süsteemiadministraatoritele, siis palun pange kaasa alltoodud üksikasjad.<br/>
    </div>
   </div>

   <div id="fa" lang="fa" class="RightToLeft">
    <div id="fa_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Persian">
       فارسی
      </a>
     </h3>
    </div>
    <p>کارسازهای ما در حال حاضر با مشکلی فنی مواجه هستند. این مشکل موقتی است و به‌زودی برطرف خواهد شد. لطفاً دقایقی دیگر <a href="javascript:" onclick="RefreshPage(); return false">دوباره تلاش کنید</a>.</p>
    <p>احتمالاً با مراجعه به کانال <a href="irc://chat.freenode.net/wikipedia" dir="auto">#wikipedia</a> در <a href="//www.freenode.net">شبکهٔ آی‌آرسی فری‌نود</a> می‌توانید اطلاعات بیشتری در این رابطه کسب کنید.</p>
    <p>بنیاد ویکی‌مدیا سازمانی ناسودبر است که تعدادی از محبوب‌ترین وب‌گاه‌های اینترنتی از جمله ویکی‌پدیا را میزبانی می‌کند. این بنیاد دائماً نیازمند سخت‌افزارهای جدید است. در صورت تمایل مبلغی <a href="//wikimediafoundation.org/wiki/Fundraising">اهدا کنید</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
	 اگر این خطا را به مدیریت سامانهٔ ویکی‌مدیا گزارش می‌کنید، خواهشمندیم جزئیات زیر را نیز در پیام خود ارسال کنید.<br/>
    </div>
   </div>

   <div id="fi" lang="fi">
    <div id="fi_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Finnish">
       Suomi
      </a>
     </h3>
    </div>
    <p>Wikimedia-säätiön palvelimilla on tapahtunut virhe. <a href="javascript:" onclick="RefreshPage(); return false">Yritä uudelleen</a> hetken kuluttua.</p>
    <p>Lisätietoja saa <a href="//www.freenode.net">Freenode</a>-verkon IRC-kanavalta <a href="irc://chat.freenode.net/wikipedia-fi">#wikipedia-fi</a>.</p>
    <p>Jos haluat auttaa voittoa tavoittelematonta Wikimedia-säätiötä, tee <a href="//wikimediafoundation.org/wiki/Lahjoitukset">lahjoitus</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Jos ilmoitat tästä virheestä Wikimedian ylläpitäjille, liitä mukaan alla olevat tiedot.<br/>
    </div>
   </div>

   <div id="fr" lang="fr">
    <div id="fr_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="French">
       Français
      </a>
     </h3>
    </div>
    <p>Les serveurs de la Fondation Wikimedia ont détecté une erreur. Merci de patienter quelques minutes avant de <a href="javascript:" onclick="RefreshPage(); return false">réessayer</a>.</p>
    <p>Pour de plus amples informations, veuillez visiter le canal <a href="irc://chat.freenode.net/wikipedia-fr">#wikipedia-fr</a> du réseau <a href="//www.freenode.net">IRC freenode</a>.</p>
    <p>Si vous voulez aider la fondation Wikimedia, à but non lucratif, qui fait fonctionner Wikipédia, vous pouvez <a href="//wikimediafoundation.org/wiki/Faire_un_don">faire un don</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Si vous signalez cette erreur aux administrateurs système de Wikimedia, veuillez indiquer les détails ci-dessous.<br/>
    </div>
   </div>

   <div id="he" lang="he" class="RightToLeft">
    <div id="he_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Hebrew">
       עברית
      </a>
     </h3>
    </div>
    <p>עקב בעיה טכנית בשרתי קרן ויקימדיה, האתרים המאוחסנים בהם אינם זמינים.</p>
    <p>הבעיה היא ככל הנראה זמנית ואנו מקווים שתפתר במהרה. אנא <a href="javascript:" onclick="RefreshPage(); return false">נסו שנית</a> בעוד מספר דקות.</p>
    <p>אם ברצונכם לעזור לקרן ויקימדיה הפועלת ללא מטרת רווח, באפשרותכם <a href="//wikimediafoundation.org/wiki/%D7%AA%D7%A8%D7%95%D7%9E%D7%95%D7%AA">לתרום לה</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
     אם תרצו לדווח על השגיאה למנהלי המערכת של ויקימדיה, אנא הקפידו לכלול את הפרטים שלהלן.<br/>
    </div>
   </div>

   <div id="id" lang="id">
    <div id="id_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Indonesian">
       Bahasa Indonesia
      </a>
     </h3>
    </div>
    <p>Server Yayasan Wikimedia sedang mengalami masalah untuk sementara waktu. Silahkan <a href="javascript:" onclick="RefreshPage(); return false">coba beberapa saat lagi</a>.</p>
    <p>Anda bisa mendapatkan informasi lebih lanjut dari <a href="irc://chat.freenode.net/wikipedia">#wikipedia</a> channel di <a href="//www.freenode.net">Freenode IRC network</a>.</p>
    <p>Wikimedia adalah yayasan nirlaba, jika Anda ingin membantu, silahkan <a href="//wikimediafoundation.org/wiki/Penggalangan_dana">berikan donasi</a> Anda.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Jika Anda melaporkan kesalahan ini kepada Pengurus Sistem Wikimedia, harap cantumkan detil berikut.<br/>
    </div>
   </div>

   <div id="it" lang="it">
    <div id="it_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Italian">
       Italiano
      </a>
     </h3>
    </div>
    <p>I server della Wikimedia Foundation hanno al momento qualche problema tecnico. Per favore, <a href="javascript:" onclick="RefreshPage(); return false">riprova</a> tra qualche minuto.</p>
    <p>Per ulteriori informazioni puoi visitare il canale <a href="irc://chat.freenode.net/wikipedia-it">#wikipedia-it</a> sulla rete IRC di <a href="//www.freenode.net">FreeNode</a>.</p>
    <p>Se vorrai aiutarci con <a href="//wikimediafoundation.org/wiki/Donazioni">una donazione</a>, te ne saremo grati.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Includi i seguenti dettagli se segnali questo errore agli amministratori di sistema di Wikimedia.<br/>
    </div>
   </div>

   <div id="ja" lang="ja">
    <div id="ja_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Japanese">
       日本語
      </a>
     </h3>
    </div>
    <p>現在、ウィキメディア財団のサーバに技術的な問題が発生しています。</p>
    <p>問題は一時的なものでまもなく回復する見込みです。しばらくしてから<a href="javascript:" onclick="RefreshPage(); return false">もう一度接続してみてください</a>。</p>
    <p>詳しい情報は <a href="//www.freenode.net">Freenode</a> の IRC チャンネル<a href="irc://chat.freenode.net/wikipedia-ja">#wikipedia-ja</a>をご覧下さい。</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
     このエラーをウィキメディアのシステム管理者に報告する際は、次に表示されるエラーの詳細もあわせてお知らせください。<br/>
    </div>
   </div>

   <div id="ko" lang="ko">
    <div id="ko_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Korean">
       한국어
      </a>
     </h3>
    </div>
    <p>현재 위키미디어 재단의 서버에 기술적 문제가 생겼습니다. 몇 분 뒤에 <a href="javascript:" onclick="RefreshPage(); return false">다시</a> 시도해 보십시오.</p>
    <p>자세한 정보를 원하신다면 <a href="//www.freenode.net">FreeNode의</a> <a href="irc://chat.freenode.net/wikipedia-ko">#wikipedia-ko</a> 채널이나 <a href="//www.hanirc.org">HanIRC의</a> <a href="irc://secure.hanirc.org/wikipedia">#wikipedia</a> 채널으로 오십시오.</p>
    <p>비영리 위키미디어 재단을 돕고 싶다면, <a href="//wikimediafoundation.org/wiki/%EA%B8%B0%EB%B6%80%EC%95%88%EB%82%B4">기부하세요</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
     위키미디어 시스템 관리자에게 오류를 보고할 때에는 다음 사항도 기재해 주세요.<br/>
    </div>
   </div>

   <div id="nl" lang="nl">
    <div id="nl_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Dutch">
       Nederlands
      </a>
     </h3>
    </div>
    <p>Onze servers hebben op dit moment een technisch probleem. Dit is waarschijnlijk tijdelijk en wordt zo snel mogelijk verholpen. <a href="javascript:" onclick="RefreshPage(); return false">Probeer het opnieuw</a> over enkele minuten.</p>
    <p>Voor meer informatie kunt u terecht op het kanaal <a href="irc://chat.freenode.net/wikipedia-nl">#wikipedia-nl</a> op het <a href="//www.freenode.net">FreeNode IRC-netwerk</a>.</p>
    <p>De Wikimedia Foundation is een organisatie zonder winstoogmerk die enkele van de meest populaire sites op Internet beheert, waaronder Wikipedia. We moeten continu nieuwe hardware bijkopen. Indien u wilt helpen, doe dan alstublieft een <a href="//wikimediafoundation.org/wiki/Giften">donatie</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Indien u deze fout meldt aan de systeembeheerders van Wikimedia Foundation, vermeld dan alstublieft onderstaande details.<br/>
    </div>
   </div>

   <div id="no" lang="no">
    <div id="no_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Norwegian">
       Norsk (Bokmål)
      </a>
     </h3>
    </div>
    <p>Wikimedia foundations servere har funnet en feil. <a href="javascript:" onclick="RefreshPage(); return false">Prøv på nytt</a> litt senere.</p>
    <p>For mer informasjon, besøk kanalen <a href="irc://chat.freenode.net/wikipedia-no">#wikipedia-no</a>.</p>
    <p>Gjerne gi en <a href="//wikimediafoundation.org/wiki/Innsamling_%28nb%29">donasjon</a> til Wikimedia Foundation.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Hvis du rapporterer denne feilen til Wikimedias systemadministratorer, vennligst ta med detaljene fra denne siden.<br/>
    </div>
   </div>

   <div id="pl" lang="pl">
    <div id="pl_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Polish">
       Polski
      </a>
     </h3>
    </div>
    <p>Serwery Fundacji Wikimedia mają w tej chwili problemy techniczne. <a href="javascript:" onclick="RefreshPage(); return false">Spróbuj ponownie później</a>.</p>
    <p>W celu uzyskania dokładniejszych informacji możesz odwiedzić kanał <a href="irc://chat.freenode.net/wikipedia-pl">#wikipedia-pl</a> na sieci IRC <a href="//www.freenode.net">FreeNode</a>.</p>
    <p>Jeśli chcesz pomóc Fundacji Wikimedia możesz <a href="//wikimediafoundation.org/wiki/Dary_pieni%C4%99%C5%BCne">złożyć darowiznę</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Jeśli zamierzasz zgłosić ten błąd administratorom Fundacji Wikimedia załącz także poniższe szczegóły.<br/>
    </div>
   </div>

   <div id="pt" lang="pt">
    <div id="pt_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Portuguese">
       Português
      </a>
     </h3>
    </div>
    <p>Os servidores da Fundação Wikimedia estão com dificuldades técnicas. Por favor, <a href="javascript:" onclick="RefreshPage(); return false">tente novamente</a> dentro de alguns minutos.</p>
    <p>Para mais informações, pode tentar o canal <a href="irc://chat.freenode.net/wikipedia-pt">#wikipedia-pt</a> na rede de <a href="//www.freenode.net">IRC FreeNode</a>.</p>
    <p>Se você gostaria de ajudar a Fundação Wikimedia, uma organização sem fins lucrativos, por favor <a href="//wikimediafoundation.org/wiki/Coleta_de_fundos">faça uma doação</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Se você informar esse erro para os administradores do sistema da Wikimedia, por favor indique os detalhes seguintes.<br/>
    </div>
   </div>

   <div id="ro" lang="ro">
    <div id="ro_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Romanian">
       Română
      </a>
     </h3>
    </div>
    <p>Serverele Fundaţiei Wikimedia întâmpină în acest moment dificultăţi tehnice. Vă rugăm să <a href="javascript:" onclick="RefreshPage(); return false">încercaţi din nou</a> în câteva minute.</p>
    <p>Pentru mai multe informaţii vizitaţi canalul <a href="irc://chat.freenode.net/ro.wikipedia">#ro.wikipedia</a> pe reţeaua <a href="//www.freenode.net">FreeNode IRC</a>.</p>
    <p>Dacă doriţi să ajutaţi Fundaţia non-profit Wikimedia, vă rugăm să <a href="//wikimediafoundation.org/wiki/Dona%C5%A3ii">faceţi o donaţie</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Dacă raportaţi această eroare administratorilor de sistem ai Wikimedia, vă rugăm includeţi detaliile de mai jos.<br/>
    </div>
   </div>

   <div id="ru" lang="ru">
    <div id="ru_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Russian">
       Русский
      </a>
     </h3>
    </div>
    <p>На серверах фонда «Викимедиа» возникли технические трудности. Проблема, скорее всего, носит временный характер и вскоре будет устранена. Пожалуйста, попробуйте <a href="javascript:" onclick="RefreshPage(); return false">обновить страницу</a> через несколько минут.</p>
    <p>Дополнительную информацию можно получить посетив IRC-канал <a href="irc://chat.freenode.net/wikipedia-ru">#wikipedia-ru</a> сети <a href="//www.freenode.net">«Freenode»</a>.</p>
    <p>Фонд «Викимедиа» (Wikimedia Foundation) — некоммерческая организация, размещающая и обслуживающая несколько наиболее популярных в Интернете сайтов, в том числе — Википедию. Фонд испытывает постоянную потребность в приобретении нового оборудования. Вы можете помочь, <a href="//wikimediafoundation.org/wiki/Сбор_средств">сделав пожертвование</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Если вы решите сообщить об ошибке нашему системному администратору, пожалуйста, передайте ему следующую техническую информацию.<br/>
    </div>
   </div>

   <div id="sr" lang="sr">
    <div id="sr_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Serbian">
       Српски
      </a>
     </h3>
    </div>
    <p>Сервери Викимедијине Задужбине тренутно имају техничке потешкоће. Молимо вас <a href="javascript:" onclick="RefreshPage(); return false">покушајте</a> касније.</p>
    <p>За даље информације, можете да посетите канал <a href="irc://chat.freenode.net/wikipedia-sr">#wikipedia-sr</a> на <a href="//www.freenode.net">FreeNode</a> ИРЦ мрежи.</p>
    <p>Ако бисте желели да помогнете непрофитабилној Фондацији Викимедије, можете то урадити <a href="//wikimediafoundation.org/wiki/%D0%94%D0%BE%D0%BD%D0%B0%D1%86%D0%B8%D1%98%D0%B5">донацијом</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Ако одлучите да пријавите ову грешку Викимедијиним системским администраторима, молимо вас да укључите и детаље приказане испод.<br/>
    </div>
   </div>

   <div id="sv" lang="sv">
    <div id="sv_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Swedish">
       Svenska
      </a>
     </h3>
    </div>
    <p>Wikimedias servrar har för tillfället tekniska problem. Du kan <a href="javascript:" onclick="RefreshPage(); return false">försöka igen</a> om någon minut.</p>
    <p>För mer information kan du besöka <a href="irc://chat.freenode.net/wikipedia-sv">#wikipedia-sv</a> på <a href="//www.freenode.net">FreeNode IRC</a>.</p>
    <p>Önskar du stödja den ideella Wikimedia Foundation, <a href="//wikimediafoundation.org/wiki/Insamling">var god lämna ett bidrag</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Om du rapporterar detta fel till Wikimedias systemadministratörer, var god inkludera detaljerna nedan.<br/>
    </div>
   </div>

   <div id="th" lang="th">
    <div id="th_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Thai">
       ไทย
      </a>
     </h3>
    </div>
    <p>เซิร์ฟเวอร์ขององค์กรวิกิมีเดียขณะนี้ ไม่สามารถถูกเรียกใช้งานได้</p>
    <p>กรุณาลองเข้ามาในเว็บใหม่อีกครั้ง ปัญหาที่เกิดขึ้นเป็นปัญหาชั่วคราว ซึ่งจะได้รับการแก้ไขในไม่ช้า</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
     หากคุณกำลังจะรายงานข้อผิดพลาดนี้ไปยังผู้ดูแลระบบของวิกิมีเดีย กรุณาระบุรายละเอียดด้านล่างนี้ไปด้วย<br/>
    </div>
   </div>

   <div id="tr" lang="tr">
    <div id="tr_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Turkish">
       Türkçe
      </a>
     </h3>
    </div>
    <p>Vıkımedya Vakfı sunucuları bir hataya rastladı. Lütfen daha sonra <a href="javascript:" onclick="RefreshPage(); return false">tekrar deneyiniz</a>.</p>
    <p>Daha fazla bilgi için <a href="//www.freenode.net">Freenode</a> IRC ağındaki <a href="irc://chat.freenode.net/wikipedia-tr">#wikipedia-tr</a> kanalını ziyaret ediniz.</p>
    <p>Kâr amacı gütmeyen Vikimedya Vakfına yardımcı olmak istiyorsanız lütfen <a href="//wikimediafoundation.org/wiki/Ba%C4%9F%C4%B1%C5%9F">bağışta bulununuz</a>.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Eğer bu hatayı Vikimedya sunucu yöneticilerine rapor etmek istiyorsanız lütfen aşağıdaki detayları belirtiniz.<br/>
    </div>
   </div>

   <div id="vi" lang="vi">
    <div id="vi_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="Vietnamese">
       Tiếng Việt
      </a>
     </h3>
    </div>
    <p>Các máy chủ của Quỹ Hỗ Trợ Wikimedia gặp lỗi. Xin hãy <a href="javascript:" onclick="RefreshPage(); return false">thử lần nữa</a>.</p>
    <p>Để biết thêm chi tiết, hãy ghé vào đài <a href="irc://chat.freenode.net/wikipedia">#wikipedia</a> trên mạng IRC <a href="//www.freenode.net">Freenode</a>.</p>
    <p>Có thể giúp đỡ Quỹ Wikimedia, một tổ chức bất vụ lợi, bằng cách quyên góp.</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff">
     Nếu gửi lỗi này cho nhóm quản lý máy móc Wikimedia, xin bao gồm những chi tiết ở dưới.<br/>
    </div>
   </div>

   <div id="zh-Hant" lang="zh-Hant">
    <div id="zh-Hant_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="TraditionalChinese">
       繁體中文
      </a>
     </h3>
    </div>
    <p>維基媒體基金會伺服器現在發生技術問題。</p>
    <p>此問題應為暫時狀況，我們將盡快修復，<a href="javascript:" onclick="RefreshPage(); return false">請稍後再試</a>。</p>
    <p>如果您願意協助非營利的維基媒體基金會，請考慮<a href="//wikimediafoundation.org/wiki/%E8%B5%84%E5%8A%A9">捐款資助</a>。</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
     如欲匯報此錯誤予維基媒體的系統管理員，請附上以下詳細資料。<br/>
    </div>
   </div>

   <div id="zh-Hans" lang="zh-Hans">
    <div id="zh-Hans_head">
     <hr noshade="noshade" size="1px" width="100%"/>
     <h3 class="LanguageHeading">
      <a name="SimplifiedChinese">
       简体中文
      </a>
     </h3>
    </div>
    <p>维基媒体基金会服务器现在发生技术问题。</p>
    <p>此问题应为暂时状况，我们将尽快修复，<a href="javascript:" onclick="RefreshPage(); return false">请稍后再试</a>。</p>
    <p>如果您愿意协助非营利的维基媒体基金会，请考虑<a href="//wikimediafoundation.org/wiki/%E8%B5%84%E5%8A%A9">捐款资助</a>。</p>
    <hr noshade="noshade" size="1px" width="80%"/>
    <div class="TechnicalStuff" style="font-style:normal">
     如欲汇报此错误予维基媒体的系统管理员，请附上以下详细数据。<br/>
    </div>
   </div>

   <!-- Technical details of the error; shows all the time, with any language -->
   <div class="TechnicalStuff">
    <bdo dir="ltr">
        PHP fatal error<?php
		// Guard against "Cannot modify header information - headers already sent" warning
		if ( !headers_sent() ) {
			header( 'HTTP/1.1 500 Internal Server Error' );
		}
        $err = error_get_last();
        $message = $err['message'];
        # error_get_last() doesn't return a fully populated array in HHVM,
        # capture file and line manually
        if ( preg_match( '/#0\\s+(\\S+?)\\((\\d+)\\)/', $message, $matches ) ) {
			echo ' ' . htmlspecialchars( $matches[1] ) . ' line ' . $matches[2];
		}
		$parts = explode( "\n", $message );
		$message = $parts[0];
		$message = preg_replace( "/^.*?exception '.*?' with message '(.*?)'.*$/im", '\1', $message );

		// Increment a counter.
		$sock = socket_create( AF_INET, SOCK_DGRAM, SOL_UDP );
		$stat = 'MediaWiki.errors.fatal:1|c';
		socket_sendto( $sock, $stat, strlen( $stat ), 0, 'statsd.eqiad.wmnet', 8125 );

        ?>: <br/>
        <?php echo htmlspecialchars( $message ); ?>
    </bdo>
    <div id="AdditionalTechnicalStuff"></div>
   </div>
  </div>

  <!-- Shadow-style gradient -->
  <div class="Lines" style="background-color:#f4f4f4;"></div>
  <div class="Lines" style="background-color:#eaeaea;"></div>
  <div class="Lines" style="background-color:#dbdbdb;"></div>
  <div class="Lines" style="background-color:#c6c6c6;"></div>
  <div class="Lines" style="background-color:#acacac;"></div>
  <div class="Lines" style="background-color:#dbe5df;"></div>

  <!-- The top row of the language links at the foot of the page -->
  <div class="BottomStrip">
   <a href="#Arabic" class="BottomLinks" id="ar_link" onclick="ShowLanguage('ar')">العربية</a>
   <a href="#Indonesian" class="BottomLinks" id="id_link" onclick="ShowLanguage('id')">Bahasa Indonesia</a>
   <a href="#Czech" class="BottomLinks" id="cs_link" onclick="ShowLanguage('cs')">Česky</a>
   <a href="#Danish" class="BottomLinks" id="da_link" onclick="ShowLanguage('da')">Dansk</a>
   <a href="#German" class="BottomLinks" id="de_link" onclick="ShowLanguage('de')">Deutsch</a>
   <a href="#Estonian" class="BottomLinks" id="et_link" onclick="ShowLanguage('et')">Eesti</a>
   <a href="#Greek" class="BottomLinks" id="el_link" onclick="ShowLanguage('el')">Ελληνικά</a>
   <a href="#English" class="BottomLinks" id="en_link" onclick="ShowLanguage('en')">English</a>
   <a href="#Spanish" class="BottomLinks" id="es_link" onclick="ShowLanguage('es')">Español</a>
   <a href="#Persian" class="BottomLinks" id="fa_link" onclick="ShowLanguage('fa')">فارسی</a>
   <a href="#French" class="BottomLinks" id="fr_link" onclick="ShowLanguage('fr')">Français</a>
   <a href="#Korean" class="BottomLinks" id="ko_link" onclick="ShowLanguage('ko')">한국어</a>
   <a href="#Italian" class="BottomLinks" id="it_link" onclick="ShowLanguage('it')">Italiano</a>
   <a href="#Hebrew" class="BottomLinks" id="he_link" onclick="ShowLanguage('he')">עברית</a>
   <a href="#Dutch" class="BottomLinks" id="nl_link" onclick="ShowLanguage('nl')">Nederlands</a>
  </div>

  <!-- Shadow-style gradient -->
  <div class="Lines" style="background-color:#9d9fa1;"></div>
  <div class="Lines" style="background-color:#a8aeb4;"></div>
  <div class="Lines" style="background-color:#b4bec6;"></div>
  <div class="Lines" style="background-color:#c0ced8;"></div>

  <!-- The bottom row of the language links at the foot of the page -->
  <div style="text-align:center; font-size:0.85em;background:#cbddeb;">
   <a href="#Japanese" class="BottomLinks" id="ja_link" onclick="ShowLanguage('ja')">日本語</a>
   <a href="#Norwegian" class="BottomLinks" id="no_link" onclick="ShowLanguage('no')">Norsk (Bokmål)</a>
   <a href="#Polish" class="BottomLinks" id="pl_link" onclick="ShowLanguage('pl')">Polski</a>
   <a href="#Portuguese" class="BottomLinks" id="pt_link" onclick="ShowLanguage('pt')">Português</a>
   <a href="#Romanian" class="BottomLinks" id="ro_link" onclick="ShowLanguage('ro')">Română</a>
   <a href="#Russian" class="BottomLinks" id="ru_link" onclick="ShowLanguage('ru')">Русский</a>
   <a href="#Serbian" class="BottomLinks" id="sr_link" onclick="ShowLanguage('sr')">Српски</a>
   <a href="#Finnish" class="BottomLinks" id="fi_link" onclick="ShowLanguage('fi')">Suomi</a>
   <a href="#Swedish" class="BottomLinks" id="sv_link" onclick="ShowLanguage('sv')">Svenska</a>
   <a href="#Thai" class="BottomLinks" id="th_link" onclick="ShowLanguage('th')">ไทย</a>
   <a href="#Vietnamese" class="BottomLinks" id="vi_link" onclick="ShowLanguage('vi')">Tiếng Việt</a>
   <a href="#Turkish" class="BottomLinks" id="tr_link" onclick="ShowLanguage('tr')">Türkçe</a>
   <a href="#TraditionalChinese" class="BottomLinks" id="zh-Hant_link" onclick="ShowLanguage('zh-Hant')">繁體中文</a>
   <a href="#SimplifiedChinese" class="BottomLinks" id="zh-Hans_link" onclick="ShowLanguage('zh-Hans')">简体中文</a>
  </div>

  <!-- Shadow-style gradient -->
  <div class="Lines" style="background-color:#9ea09f;"></div>
  <div class="Lines" style="background-color:#adb1af;"></div>
  <div class="Lines" style="background-color:#bdc3bf;"></div>
  <div class="Lines" style="background-color:#ccd4cf;"></div>

 </body>
</html>
