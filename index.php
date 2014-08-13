<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Chris Hahn</title>

    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/pygment_trac.css">
    <link href="//rawgithub.com/noelboss/featherlight/master/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="wrapper">
      <header>
        <h1>Chris Hahn</h1>
        <img src='images/me.jpg' />
        <p>
            Born and raised in Florida.
            <br/><br/>
            Moved to Chicago for college and real winters.
            <br/><br/>
            I convert girl-scout cookies and dubstep into websites.
        </p>


        <p class="view">
            <a href="https://github.com/chrishahn" target="_blank">GitHub Profile</a>
            &nbsp;•&nbsp;
            <a href="resume.pdf" target="_blank">Resume</a>
        </p>

    </header>
    <section>
        <h1>Projects</h1>
        <p>Here's a brief list of some side projects I've worked on, with links to some demo pages.</p>

        <h2>Javascript Landscape Generator</h2>
        <p>I found this article on using maths to generate landscapes randomly using native JS, and loved it. I'm a big fan of computer-generated art (see: pixel art generator) so this is right up my alley.</p>
        <p><a href="projects/js-landscape">DEMO</a> - <a target="_blank" href="https://github.com/chrishahn/js-landscape">GitHub</a></p>
        <p>Original Article - <a href="http://www.playfuljs.com/realistic-terrain-in-130-lines/">http://www.playfuljs.com/realistic-terrain-in-130-lines/</a></p>
        <p>
            <span data-featherlight="images/landscape1.jpg"><img class='thumb' src='images/landscape1.jpg' /></a></span>
            <span data-featherlight="images/landscape2.jpg"><img class='thumb' src='images/landscape2.jpg' /></a></span>
            <span data-featherlight="images/landscape3.jpg"><img class='thumb' src='images/landscape3.jpg' /></a></span>
        </p>

        <h2>Pixel Art Generator</h2>
        <p>This is basically a fancy picture resolution-lowerer, but I like the end results. It uses PHP's GD image library to calculate the average color in a square of pixels, and replaces the square entirely with that color. Instant pixel art!</p>
        <p><a href="projects/pixelfier">DEMO</a> - <a target="_blank" href="https://github.com/chrishahn/pixelfier">GitHub</a></p>
        <p>
            <span data-featherlight="images/pixelfier-metroid-original.jpg"><img class='thumb' src='images/pixelfier-metroid-original.jpg' /></a></span>
            <span data-featherlight="images/pixelfier-metroid-converted.jpg"><img class='thumb' src='images/pixelfier-metroid-converted.jpg' /></a></span>
        </p>

        <h2>Pixel Art Canvas</h2>
        <p>Are you noticing a pattern? I wanted to try my hand at creating some pixel art of my own, and couldn't really find a good tool for helping me achieve an authentic, boxy looking art style. So I made one! Also leveraging PHP's GD image library, it takes the coordinates and colors from the faux-canvas and draws the resulting images.</p>
        <p><a href="projects/pixel-canvas">DEMO</a> - <a target="_blank" href="https://github.com/chrishahn/pixel-canvas">GitHub</a></p>
        <p>
            <span data-featherlight="images/mario.jpg"><img class='thumb' src='images/mario.jpg' /></a></span>
            <span data-featherlight="images/yoshi.jpg"><img class='thumb' src='images/yoshi.jpg' /></a></span>
            <span data-featherlight="images/megaman.jpg"><img class='thumb' src='images/megaman.jpg' /></a></span>
        </p>

        <h2>Bernie Mills</h2>
        <p>This concept began as an inside joke in college, and grew into my go-to site to re-write whenever I want to try a new technology. This version uses backbone to power a single-page JS app that talks to a node.js server. Entries are stored in Mongo, and there are even some unit tests written for the server side of things.</p>
        <p>NOTE: This site is meant to entertain some very immature people, and contains strong language. You've been warned.</p>
        <p><a href="projects/berniebb">DEMO</a> - <a target="_blank" href="https://github.com/chrishahn/berniebb">GitHub</a></p>
        <p>Node.js code running the API server - <a target="_blank" href="https://github.com/chrishahn/bernie-node">GitHub</a></p>

        <h2>Comic Archive Reader</h2>
        <p>I was looking for a web-based way to read large amount of comics, because... ok I don't have a non-dorky reason. Anyway this page will unzip archives on-demand and display their contents for browsing. JQuery and pretty photo are used to spice up the interface.</p>
        <p><a href="projects/comic-archive-reader">DEMO</a> - <a target="_blank" href="https://github.com/chrishahn/comic-archive-reader">GitHub</a></p>
    </section>
    </div>
    <script src="javascripts/scale.fix.js"></script>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//rawgithub.com/noelboss/featherlight/master/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>