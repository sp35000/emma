<?php
$title="Work4Love.net - Learning";
$description="Work4Love.net - Learning: Sites de Cursos - Life Long Learning.";
$keywords="educação,cursos,línguas,tecnologia";
include("../include/header.php");
?>
<body>
<?php
include("../include/bodystart.php");
include("../include/menusup.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 columns text-center firstdiv">
    <h1>Learning</h1>
    <form id="search-form" action="https://www.wikipedia.org/search-redirect.php"
    data-el-section="search" target="_blank">
    <!-- search-redirect.php is project-independent, requires a family -->
    <input type="hidden" name="family" value="wikipedia">
    <input type="hidden" id="hiddenLanguageInput" name="language" value="en">
    <label for="searchInput" class="screen-reader-text" data-jsl10n="search-input-label">Search
    Wikipedia</label>
    <input id="searchInput" name="search" type="search" size="20" autofocus="autofocus"
    accesskey="F" dir="auto" autocomplete="off" list="suggestions">
    <select id="searchLanguage" name="language">
    <!-- 100,000+ content pages, sorted by romanization -->
    <option value="ar" lang="ar">العربية</option><!-- Al-ʿArabīyah -->
    <option value="az" lang="az">Azərbaycanca</option>
    <option value="bg" lang="bg">Български</option><!-- Bǎlgarski -->
    <option value="nan" lang="nan">Bân-lâm-gú / Hō-ló-oē</option>
    <option value="be" lang="be">Беларуская (Акадэмічная)</option>
    <!-- Belaruskaya (Akademichnaya) -->
    <option value="ca" lang="ca">Català</option>
    <option value="cs" lang="cs">Čeština</option>
    <option value="da" lang="da">Dansk</option>
    <option value="de" lang="de">Deutsch</option>
    <option value="et" lang="et">Eesti</option>
    <option value="el" lang="el">Ελληνικά</option><!-- Ellīniká -->
    <option value="en" lang="en" selected=selected>English</option><!-- English -->
    <option value="es" lang="es">Español</option>
    <option value="eo" lang="eo">Esperanto</option>
    <option value="eu" lang="eu">Euskara</option>
    <option value="fa" lang="fa">فارسی</option><!-- Fārsi -->
    <option value="fr" lang="fr">Français</option>
    <option value="gl" lang="gl">Galego</option>
    <option value="hy" lang="hy">Հայերեն</option><!-- Hayeren -->
    <option value="hi" lang="hi">हिन्दी</option><!-- Hindī -->
    <option value="hr" lang="hr">Hrvatski</option>
    <option value="id" lang="id">Bahasa Indonesia</option>
    <option value="it" lang="it">Italiano</option>
    <option value="he" lang="he">עברית</option><!-- ʿIvrit -->
    <option value="ka" lang="ka">ქართული</option><!-- Kartuli -->
    <option value="la" lang="la">Latina</option>
    <option value="lt" lang="lt">Lietuvių</option>
    <option value="hu" lang="hu">Magyar</option>
    <option value="ms" lang="ms">Bahasa Melayu</option>
    <option value="min" lang="min">Bahaso Minangkabau</option>
    <option value="nl" lang="nl">Nederlands</option>
    <option value="ja" lang="ja">日本語</option><!-- Nihongo -->
    <option value="no" lang="nb">Norsk (Bokmål)</option>
    <option value="nn" lang="nn">Norsk (Nynorsk)</option>
    <option value="ce" lang="ce">Нохчийн</option><!-- Noxçiyn -->
    <option value="uz" lang="uz">Oʻzbekcha / Ўзбекча</option>
    <option value="pl" lang="pl">Polski</option>
    <option value="pt" lang="pt">Português</option>
    <option value="kk" lang="kk">Қазақша / Qazaqşa / قازاقشا</option>
    <option value="ro" lang="ro">Română</option>
    <option value="ru" lang="ru">Русский</option><!-- Russkiy -->
    <option value="cy" lang="cy">Cymraeg</option><!-- Saesneg -->
    <option value="simple" lang="en">Simple English</option>
    <option value="ceb" lang="ceb">Sinugboanong Binisaya</option>
    <option value="sk" lang="sk">Slovenčina</option>
    <option value="sl" lang="sl">Slovenščina</option>
    <option value="sr" lang="sr">Српски / Srpski</option>
    <option value="sh" lang="sh">Srpskohrvatski / Српскохрватски</option>
    <option value="fi" lang="fi">Suomi</option>
    <option value="sv" lang="sv">Svenska</option>
    <option value="ta" lang="ta">தமிழ்</option><!-- Tamiḻ -->
    <option value="th" lang="th">ภาษาไทย</option><!-- Phasa Thai -->
    <option value="tr" lang="tr">Türkçe</option><!-- Turkce -->
    <option value="azb" lang="azb">تۆرکجه</option><!-- Türkce -->
    <option value="uk" lang="uk">Українська</option><!-- Ukrayins’ka -->
    <option value="ur" lang="ur">اردو</option><!-- Urdu -->
    <option value="vi" lang="vi">Tiếng Việt</option>
    <option value="vo" lang="vo">Volapük</option>
    <option value="war" lang="war">Winaray</option>
    <option value="zh" lang="zh">中文</option><!-- Zhōngwén -->
    <option value="ko" lang="ko">한국어</option><!-- Hangugeo -->
    </select>
    <button type="submit">Search</button>
    <input type="hidden" value="Go" name="go">
    </form>
    <h2>Main</h2>
    <ul id="hlist">
    <li><a href="https://www.escolavirtual.gov.br/" target="_blank">EV.G</a>|</li>
    <li><a href="https://www.infolivros.org/livros-pdf-gratis/" target="_blank">Infolivros</a>|</li>
    <li><a href="http://www.openculture.com/freeonlinecourses" target="_blank">OpenCulture</a>|</li>
    <li><a href="https://www.edx.org/" target="_blank">edX</a>|</li>
    <li><a href="https://www.udacity.com/" target="_blank">Udacity</a>|</li>
    <li><a href="https://www.historiadasartes.com/" target="_blank">Hist&oacute;ria das Artes</a>|
    </li>
    <li><a href="http://www.dominiopublico.gov.br" target="_blank">Dom&iacute;nio
    P&uacute;blico</a>|</li>
    <li><a href="https://www.todamateria.com.br/" target="_blank">Toda Mat&eacute;ria</a></li>
    <br/>
    <li><a href="https://openlibrary.org/" target="_blank">Open Library</a>|</li>
    <li><a href="https://dlivros.com/" target="_blank">dLivros</a>|</li>
    <li><a href="https://www.coursera.org/" target="_blank">Coursera</a>|</li>
    <li><a href="http://academicearth.org/" target="_blank">Academic Earth</a>|</li>
    <li><a href="https://pt.khanacademy.org/" target="_blank">Khan Academy</a>|</li>
    <li><a href="http://ocw.mit.edu/index.htm" target="_blank">MIT</a>|</li>
    <li><a href="https://www.futurelearn.com" target="_blank">Future Learn</a>|</li>
    <li><a href="https://continuingstudies.stanford.edu/" target="_blank">Stanford</a>|</li>
    <li><a href="https://www.udemy.com/" target="_blank">Udemy</a>|</li>
    <li><a href="https://www.dummies.com/" target="_blank">Dummies</a></li>
    </ul>

    <h2>Languages</h2>
    <ul id="hlist">
    <li><a href="https://www.aliancafrancesa.com.br/" target="_blank">Aliança Francesa</a>|</li>
    <li><a href="https://www.wanikani.com/" target="_blank">WaniKani</a>|</li>
    <li><a href="https://www.ets.org/toefl" target="_blank">TOEFL</a>|</li>
    <li><a href="https://ielts.org" target="_blank">IELTS</a>|</li>
    <li><a href="https://www.ef.com.br/" target="_blank">EF</a>|</li>
    <li><a href="http://www.institutoconfucio.com.br/" target="_blank">Instituto
    Conf&uacute;cio</a>|</li>
    <li><a href="https://site.aliancacultural.org.br/" target="_blank">Alian&ccedil;a Cultural</a>|</li>
    <li><a href="https://learngerman.dw.com/pt-br/overview" target="_blank">Deutsche
    Welle</a></li>
    <br/>
    <li><a href="https://www.italki.com/" target="_blank">italki</a>|</li>
    <li><a href="https://aprendendoingles.com.br/" target="_blank">Aprendendo Ingl&ecirc;s</a>|</li>
    <li><a href="http://www.aprender-espanhol.com/index.html" target="_blank">Aprender Espanhol</a>|
    </li>
    <li><a href="https://www.studyspanishinpanama.com/" target="_blank">EPA</a>|</li>
    <li><a href="https://www.conjugacion.es" target="_blank">Conjugacion.es</a>|</li>
    <li><a href="https://languagetool.org/" target="_blank">Language Tool</a>|</li>
    <li><a href="https://translate.google.com" target="_blank">Translate</a></li>
    </ul>

    <h2>Technology</h2>
    <ul id="hlist">
    <li><a href="https://www.guru99.com/" target="_blank">Guru99</a>|</li>
    <li><a href="https://www.packtpub.com/mapt" target="_blank">Mapt</a>|</li>
    <li><a href="https://www.cod3r.com.br/" target="_blank">Cod3r</a>|</li>
    <li><a href="https://learncodethehardway.org/" target="_blank">Learn Code THW</a>|</li>
    <li><a href="https://exercism.io/" target="_blank">Exercism</a>|</li>
    <li><a href="delicious-20131204.html" target="_blank">Del.icio.us legacy</a>|</li>
    <li><a href="https://www.codecademy.com" target="_blank">Code Academy</a>|</li>
    <li><a href="https://hackr.io/" target="_blank">hackr.io</a>|</li>
    <li><a href="https://github.com/arthurspk/guiadevbrasil" target="_blank">Guia Dev Brasil</a></li>
    <li><a href="https://mitpress.mit.edu/9780262046305/introduction-to-algorithms/" target="_blank">Algorithms</a>|</li>
    <li><a href="http://www.thedevelopersconference.com.br/tdconline" target="_blank">TDC</a>|</li>
    <li><a href="https://temporealeventos.com.br/" target="_blank">Tempo Real</a>|</li>
    <li><a href="http://www.w3schools.com" target="_blank">W3Schools</a>|</li>
    <li><a href="http://oceanbrasil.com/online/" target="_blank">Samsung Ocean</a>[</li>
    <li><a href="https://github.com/paulosalvatore" target="_blank">Git - Prof. Paulo Salvatore</a>]</li>
    <li><a href="https://4linux.com.br/" target="_blank">4 Linux</a>|</li>

    <br/>
    <li><a href="https://github.com/Universidade-Livre/ciencia-da-computacao" target="_blank">Universidade Brasileira Livre</a>|</li>
    <li><a href="https://flaviocopes.com/" target="_blank">Flavio Copes</a>|</li>
    <li><a href="https://gist.github.com/dianaarnos/3631340cb06065f34211bfb3d3bbdc6b" target="_blank">Trabalhar na Gringa</a>|</li>
    <li><a href="https://www.crackingthecodinginterview.com/" target="_blank">Cracking the Coding Interview</a>|</li>
    <li><a href="https://www.freecodecamp.org/" target="_blank">freeCodeCamp</a></li>
    </ul>

    <h2><a href="/sig/sites/search.php?category=Learning">More sites...</h2>
    </div>
  </div> 
<?php include("../include/footer.php"); ?>
</div>
</body>
</html>
