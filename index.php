<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One%7CSource+Code+Pro" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

	 <link href="https://raw.githubusercontent.com/eduardoboucas/include-media/master/dist/_include-media.scss" rel="stylesheet">

	 

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style type="text/css">
		/* ############ MIXINS  ############## */

// neon borders
@mixin neon-border($color,$rgba,$inset,$x,$y){
  // $color - border color, $rgba - shadow, $inset - true/false
  border: 2px solid $color;
  @if $inset == 'true' {
    -webkit-box-shadow: 0px 0px $x $y $rgba, inset 0px 0px $x $y $rgba;
    -moz-box-shadow:    0px 0px $x $y $rgba, inset 0px 0px $x $y $rgba;
    box-shadow:         0px 0px $x $y $rgba, inset 0px 0px $x $y $rgba;
  }@else if $inset == 'false'{
    -webkit-box-shadow: 0px 0px $x $y $rgba;
    -moz-box-shadow:    0px 0px $x $y $rgba;
    box-shadow:         0px 0px $x $y $rgba;
  }
}

// scan line and opacity effect animation
@mixin scanOpacity($background){

  // if $background == true  move background if no just animate opacity
  -webkit-animation: ScanLine 10s ease-in-out infinite;
  -moz-animation: ScanLine 10s ease-in-out infinite;
  animation: ScanLine 10s ease-in-out infinite;

  @if $background == "true"{
    @-webkit-keyframes ScanLine {
      0%{background-position:51% 0%; opacity: 0.9}
      10%{opacity: 0.8}
      20%{opacity: 0.7}
      30%{opacity: 0.8}
      40%{opacity: 0.9}
      50%{background-position:50% 100%;opacity: 1}
      60%{opacity: 0.9}
      70%{opacity: 0.6}
      80%{opacity: 0.9}
      90%{opacity: 0.8}
      100%{background-position:51% 0%;opacity: 0.9}
  }
    @-moz-keyframes ScanLine {
      0%{background-position:51% 0%; opacity: 0.9}
      10%{opacity: 0.8}
      20%{opacity: 0.7}
      30%{opacity: 0.8}
      40%{opacity: 0.9}
      50%{background-position:50% 100%;opacity: 1}
      60%{opacity: 0.9}
      70%{opacity: 0.6}
      80%{opacity: 0.9}
      90%{opacity: 0.8}
      100%{background-position:51% 0%;opacity: 0.9}
    }
    @keyframes ScanLine {
      0%{background-position:51% 0%; opacity: 0.9}
      10%{opacity: 0.8}
      20%{opacity: 0.7}
      30%{opacity: 0.8}
      40%{opacity: 0.9}
      50%{background-position:50% 100%;opacity: 1}
      60%{opacity: 0.9}
      70%{opacity: 0.6}
      80%{opacity: 0.9}
      90%{opacity: 0.8}
      100%{background-position:51% 0%;opacity: 0.9}
    }
}@else{

    @-webkit-keyframes ScanLine {
       0%{opacity: 0.8}
       10%{opacity: 0.5;}
       20%{opacity: 0.9}
       30%{opacity: 0.7}
       40%{opacity: 0.9}
       50%{opacity: 1}
       60%{opacity: 0.9}
       70%{opacity: 0.6}
       80%{opacity: 0.9}
       90%{opacity: 0.8}
       100%{opacity: 0.9}
    }
    @-moz-keyframes ScanLine {
      0%{opacity: 0.8}
      10%{opacity: 0.5}
      20%{opacity: 0.9}
      30%{opacity: 0.7}
      40%{opacity: 0.9}
      50%{opacity: 1}
      60%{opacity: 0.9}
      70%{opacity: 0.6}
      80%{opacity: 0.9}
      90%{opacity: 0.8}
      100%{opacity: 0.9}
    }
    @keyframes ScanLine {
      0%{opacity: 0.8}
      10%{opacity: 0.5}
      20%{opacity: 0.9}
      30%{opacity: 0.7}
      40%{opacity: 0.9}
      50%{opacity: 1}
      60%{opacity: 0.9}
      70%{opacity: 0.6}
      80%{opacity: 0.9}
      90%{opacity: 0.8}
      100%{opacity: 0.9}
    }
  }
}

// glitch effect
@mixin glitchEffect(){
  -webkit-animation: Glitch 10s ease-in-out infinite;
  -moz-animation: Glitch 10s ease-in-out infinite;
  animation: Glitch 10s ease-in-out infinite;

  @-webkit-keyframes Glitch {
    0%{}
    9.9%{-webkit-transform:skew(0deg);}
    10%{-webkit-transform:skew(1deg);}
    10.1%{-webkit-transform:skew(0deg);}
    89.9%{-webkit-transform:skew(0deg);}
    90%{-webkit-transform:skew(-4deg);}
    90.1%{-webkit-transform:skew(0deg);}
    100%{}
  }
  @-moz-keyframes Glitch {
    0%{}
    9.9%{-webkit-transform:skew(0deg);}
    10%{-webkit-transform:skew(1deg);}
    10.1%{-webkit-transform:skew(0deg);}
    89.9%{-webkit-transform:skew(0deg);}
    90%{-webkit-transform:skew(-4deg);}
    90.1%{-webkit-transform:skew(0deg);}
    100%{}
  }
  @keyframes Glitch {
    0%{}
    9.9%{-webkit-transform:skew(0deg);}
    10%{-webkit-transform:skew(1deg);}
    10.1%{-webkit-transform:skew(0deg);}
    89.9%{-webkit-transform:skew(0deg);}
    90%{-webkit-transform:skew(-4deg);}
    90.1%{-webkit-transform:skew(0deg);}
    100%{}
  }
}

@mixin cursorBlink($time){
  -webkit-animation: Blink $time ease infinite;
  -moz-animation: Blink $time ease infinite;
  animation: Blink $time ease infinite;

  @-webkit-keyframes Blink {
     0%{opacity: 0}
     50%{opacity: 1}
     100%{opacity: 0}
  }
  @-moz-keyframes Blink {
    0%{opacity: 0}
    50%{opacity: 1}
    100%{opacity: 0}
  }
  @keyframes Blink {
    0%{opacity: 0}
    50%{opacity: 1}
    100%{opacity: 0}
  }
}

/* ############ END/MIXINS  ############## */

/* ############ COLORS  ############## */

$bukner : #141f23;
$black-pearl : #051D29;
$spray: #93EDF5;
$picton-blue: #4BA0E3;
$iceberg:#d9f2f4;
$dairy-cream:#F7E3AF;
$blosom: #D4AFB9;
$burnt-siennaRGBA:rgba(240, 93, 94, 0.78);
$cream-canRGBA: rgba(239, 199, 97, 0.78);
$curious-blueRGBA: rgba(16, 81, 139, 0.78);
$aquaRGBA: rgba(0, 255, 255, 0.83);


/* ############ END/COLORS  ############## */

/* ############ TYPOGRAPHY  ############## */

h1{
  font-family: 'Black Ops One', cursive;
  font-size: 18px;
  @include media('>=tablet'){
    font-size: 22px;
  }
  margin: 10px;
}

h2{
  font-family: 'Black Ops One', cursive;
  font-size: 30px;
  margin: 10px;
}

// links
a{
  color: $iceberg;
  text-decoration: none;
  transition: all 1s ease;

  // square brackets
  &.brackets{
    padding-bottom: 2px;
    &::before{
      content:'[ ';
    }
    &::after{
      content:' ]';
    }
  }
  &:hover, &:active, &:focus{
    background: $iceberg;
    color: black;
  }
}

/* ############ END/TYPOGRAPHY  ############## */

/* ############ BUTTONS  ############## */

.btn{
  padding: 5px;
  margin: 5px;
  color:black;
  background: $spray;
  text-decoration: none;
  text-transform: uppercase;
  text-shadow: none;
  font-weight: bold;

  // neon border effect
  @include neon-border($spray,$curious-blueRGBA,'false',4px,2px);

  &:hover{
    background: transparent;
    color: $spray;
    text-shadow: 0px 0px 5px $aquaRGBA;
  }

}

/* ############ END/BUTTONS  ############## */

/* ############ BASE  ############## */

body{
  font-size: 16px;
  font-family: 'Source Code Pro', monospace;
  color: $spray;
  text-shadow: 0px 0px 5px $aquaRGBA;
  background:$black-pearl;

  // background animation
  @include scanOpacity('false');

  @include media('>tablet'){
    background:$black-pearl url('https://markostefanovic.github.io/random-quote-generator/images/back.png') repeat 300% 300% ;

    @include scanOpacity('true');
  }
}

//neon border
.border{
  &.blue{
    @include neon-border($picton-blue,$curious-blueRGBA,'true',4px,2px);
  }
  &.red{
    @include neon-border($blosom,$burnt-siennaRGBA,'false',2px,1px);
  }

}

.cursor{
  color: $spray;
  background: transparent;
  text-shadow: 0px 0px 5px $aquaRGBA;

  // blinking cursor animation
  @include cursorBlink(2s);
}

.float-left{
  float:left;

}
.clear{
  clear: both;
}
/* ############ END/BASE  ############## */

/* ############ CONTAINER  ############## */

.container{
  max-width: 800px;
  margin: 0 auto;
  min-width: 300px;

  .wrapper{
    padding: 2px;

    // glitch effect
    @include glitchEffect();

  }
}

/* ############ END/CONTAINER  ############## */

/* ############ QUOTE - MACHINE  ############## */

.quote-machine{
  float: left;
  margin: 5px;
  width: 95vw;
  @include media('>=tablet'){
    width: 600px;
  }
}

header{
  margin-bottom: 2px;
  min-height: 50px;
  position: relative;
  span{
    position:absolute;
    right: 5px;
    bottom: 5px;
  }
}

main{
  margin-bottom: 2px;
  padding: 5px;
  position: relative;
  min-height: 300px;
  @include media('<tablet','landscape'){
    min-height: 170px;
  }


  blockquote{
    position: relative;
    min-height: 130px;
    margin: 10px;

    .author{
      margin-top: 10px;
      float: right;

    }
    .warning{
      padding-top: 10px;
      text-align: center;
      >span{
        color: black;
        background: $blosom;
        font-weight: bold;
        text-transform: uppercase;
        text-shadow: none;
      }
    }
  }

  .block{
    position: absolute;
    bottom: 15px;
  }

}

  .page-author{
    text-align: center;
  }

footer{
  padding-top: 5px;
}

/* ############ END/QUOTE - MACHINE  ############## */

/* ############ MEMORY MODULE  ############## */

.mem{
  width: 105px;
  margin: 5px;
  padding: 2px;
  float: left;
  ul{
    padding-left: 2px;
    padding-top: 2px;
    li{
      list-style:none;
      display: inline-block;
      margin: -4px;

    }
  }
  .module{
    margin: 3px;

    width: 6px;
    height: 16px;
    display: inline-block;
    background: $spray;

    @include neon-border($spray,$aquaRGBA,'false',2px,1px);
  }

  header{
    margin: 5px 5px 5px 0;
    min-height: 20px;
    h2{
      font-size: 30px;
      margin: 5px;
    }
  }

  .cell{
    float: left;
  }

  // when clicked on new quote
  .opened{
    color:$blosom;
    text-shadow: 0px 0px 5px $burnt-siennaRGBA;
    .module{
      transition: background 2s,border 2s;
      background: $blosom;
      @include neon-border($blosom,$burnt-siennaRGBA,'false',2px,1px);
    }
  }
}

/* ############ END/MEMORY MODULE  ############## */


	</style>

	<script type="text/javascript">
		$(function() {

  var quotes = [{
    quote: 'Teknologi hanyalah alat. Namun, <br> untuk menjadikan anak-anak bisa saling bekerjasama dan termotivasi, <br> guru adalah yang paling penting.',
    author: 'Bill Gates',
    link: '#'
  }, 
   {
    quote: 'Semua orang jenius. Tetapi jika Anda menilai seekor ikan dengan kemampuannya memanjat pohon,<br> ia akan hidup seumur hidup dengan percaya bahwa itu bodoh.',
    author: 'Albert Einstein',
    link: '#'
  },   
  {
    quote: 'Keberhasilan bukanlah milik orang yang pintar. <br>Keberhasilan adalah kepunyaan mereka yang senantiasa berusaha.',
    author: 'Bj Habibie',
    link: '#'
  },   
  {
    quote: 'Setiap orang menjadi guru, setiap rumah menjadi sekolah.',
    author: 'Ki Hadjar Dewantara',
    link: '#'
  }

  ];

  // vars
  var i = 0;
  var x = 0;
  var result = [];
  var $element = $('#quote');
  var $tweet = $('#tweet-wrapper');
  var htmlOutput;
  // IIFE - get array of random numbers
  (function() {

    var minNum = 0;
    var maxNum = quotes.length;
    var randomNum = 0;

    while (result.length < maxNum) {
      randomNum = Math.floor(Math.random() * (maxNum - minNum)) + minNum;
      // if random number doesnt exists in array push it to array
      if (result.indexOf(randomNum) > -1) continue;
      result.push(randomNum);
    }
  })();


  function output() {
    // x iterates quotes obj
    if (x < quotes.length) {
      var num = result[x];

      if (quotes[num].link == '#') {
        htmlOutput = '<p>' + quotes[num].quote + '</p>' + '<footer><a href="#" class="brackets author">' + quotes[num].author + '</a><span class="cursor blink">&#9646;</span></footer>';
      } else {
        htmlOutput = '<p>' + quotes[num].quote + '</p>' + '<footer><a href="' + quotes[num].link + '" target="_blank" class="brackets author">' + quotes[num].author + '</a><span class="cursor blink">&#9646;</span></footer>';
      }
      $('#' + num).addClass('opened');
      $tweet.html('<a href="https://twitter.com/intent/tweet?text=' + quotes[num].quote + '-' + quotes[num].author + '" class="btn" target="_blank">Tweet Quote</a>');
    } else {
      htmlOutput = '';
    }
    //$element.html(htmlOutput);
    x++;
    return render();
  };

  output();


  var isTag, char, text;

  function render() {
    //console.log('i',i);

    text = htmlOutput.slice(0, i++);

    if (text === htmlOutput) return i = 0;

    $element.html(text + '&#9646;');

    char = text.slice(-1);

    if (char === '<') isTag = true;
    if (char === '>') isTag = false;

    if (isTag) return render();

    return setTimeout(render, 20);
  };

  $('#newQuoteBtn').on('click', function() {

    output();

  });


});

	</script>
</head>
<body>
<div class="container">
    <!-- random quote machine -->
    <div class="wrapper quote-machine border blue">
      <header class="border blue">
        <h1>Selamat Hari Guru Nasional Tahun 2022</h1>
        
      </header>
      <main class="border blue">

       <blockquote id="quote"></blockquote>
        <div class="block">
          <a href="#" id="newQuoteBtn" class="btn">Quote Lainnya</a>
         <!--  <span id="tweet-wrapper"> -->
          </span>
        </div>
      </main>
      <footer class="border blue">
        <p class="page-author">Modified by <br/><a href="https://instagram.com/adithairun/" class="brackets" target="_blank">Aditya N. Hairun</a><br/>for HGN-2022</p>
      </footer>
    </div>

    
</div>
  
<audio controls id="player" preload="auto" autoplay loop><source src="terima-kasih-guru.mp3" type="audio/mp3"> </audio>

<script>
var x = document.getElementById("myAudio");

function enableAutoplay() { 
  x.autoplay = true;
  x.load();
}
 
function disableAutoplay() { 
  x.autoplay = false;
  x.load();
} 
  
function checkAutoplay() { 
  alert(x.autoplay);
} 
</script> 


 <!--  <iframe frameborder="0" height="100%" width="100%"
    src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&controls=0&showinfo=0&autohide=1">
  </iframe> -->

</body>
</html>