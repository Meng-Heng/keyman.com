<?php
session_start();
require_once('includes/servervars.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Keyman for iPhone and iPad Information Page</title>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="<?php echo cdn("css/app-info.css"); ?>" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-249828-1',  'auto', {'allowLinker': true});
      ga('require', 'linker');
      ga('linker:autoLink', 
        ['keyman.com', 'www.keyman.com', 
         'keymanweb.com', 'www.keymanweb.com', 
         'help.keyman.com', 
         'blog.keyman.com',
         'www.tavultesoft.com', 'tavultesoft.com', 'secure.tavultesoft.com'] );
      ga('send', 'pageview');
    </script>
</head>

<body>
    <div class="wrapper">
		<p class="branding">
			<img class="logo" id="logo" src="<?php echo cdn("img/logo1.png"); ?>" alt='Keyman Logo' style="margin-bottom:20px;"} />
		</p>
		<p class="branding">
			<img class="logo" id="sillogo" src="<?php echo cdn("img/sil-small.png"); ?>" alt='SIL International Logo' style="height:94px;margin-bottom:6px;" />
		</p>
		<p class="branding">
			Copyright &copy; 1992-2018
		</p>
		<p class="branding">
			<img class="logo" id="separatorbar" src="<?php echo cdn("img/headerbar.png"); ?>" alt='Coloured separator bar' style="margin-bottom:6px; width:100%" />
		</p>
        <h2>
           Getting Started
        </h2>
        <p>
            The Keyman App lets you type in over 600 languages. To get started, here are some helpful hints:
            <br/><br/>
            <table>
                <tr>
                    <th colspan="2">Keyboard Keys <br/>(Keyboard Present)</th>
                </tr>
                <tr>
                    <td><img src="<?php echo cdn("img/app/globe.png"); ?>" /></td>
                    <td>Install or select another language/keyboard</td>
                </tr>
                <tr>
                    <td><img src="<?php echo cdn("img/app/hide-keyboard.png"); ?>" /></td>
                    <td>Hide the keyboard</td>
                </tr>
                <tr>
                    <td><img src="<?php echo cdn("img/app/backspace.png"); ?>" /></td>
                    <td>Backspace</td>
                </tr>
                <tr>
                    <td><img src="<?php echo cdn("img/app/return.png"); ?>" /></td>
                    <td>Return</td>
                </tr>
                <tr>
                    <td><img src="<?php echo cdn("img/app/shift.png"); ?>" /></td>
                    <td>Shift key. Touch-and-hold this key to access the CTRL, ALT and CTRL ALT keys (which can access additional key layers)</td>
                </tr>
                <tr>
                    <td><img src="<?php echo cdn("img/app/touch-hold.png"); ?>" /></td>
                    <td>Keys with a small dot in the top right corner indicate a touch-hold key. Access further functionality by touch-holding the key</td>
                </tr>
       <tr>
           <th colspan="2">Toolbar Icons</th>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/share.png"); ?>" /></td>
           <td>Share your text via Mail, Text, Facebook or Twitter</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/browser-icon.png"); ?>" /></td>
           <td>Open the Keyman Browser (Pro Edition)</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/menu-icon.png"); ?>" /></td>
           <td>Open the menu for additional options</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/font-size.png"); ?>" /></td>
           <td>Adjust the font size</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/delete.png"); ?>" /></td>
           <td>Delete all current text</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/get-started.png"); ?>" /></td>
           <td>Open the initial setup screen</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/info.png"); ?>" /></td>
           <td>Load this help page</td>
       </tr>
   </table>
</p>
<h2>Switching between Keyboards</h2>
<p>
   To switch keyboards, follow these steps:
   <br/><br/>
   Step 1)
   <br/>
   With the keyboard visible, touch the globe key:
   <br/>
   <img src="<?php echo cdn("img/app/globe.png"); ?>" />
   <br/>
   This will bring up a list of all currently installed languages (the default is English USA). If you have already downloaded additional languages, they will appear here. Simply select them and the keyboard will re-appear with the new language.
   <br/><br/>
   If you haven't installed any languages as yet, touch the <span class="command">+</span> button in the top right corner of your screen.
   <br/><br/>
   Step 2)
   <br/>
   A list of all available languages will appear. Scroll through this list until you find the language you want to install. Some languages may have multiple keyboards - for example we have 10 different Tamil keyboards.
   <br/>
   <img src="<?php echo cdn("img/app/lang-list.png"); ?>" />
   <br/><br/>
   Select the language and keyboard you want to install - a popup will ask for confirmation, hit the <span class="command">Download</span> button.
   <br/>
   <img src="<?php echo cdn("img/app/confirm-dl.png"); ?>" />
   <br/><br/>
   Step 3)
   <br/>
   Once the download is complete, the new keyboard will be selected. Touch the <span class="command">Done</span> button on the top right corner of your screen and the new keyboard will appear.
   <br/>
   <img src="<?php echo cdn("img/app/dl-success.png"); ?>" />
</p>
<h2>Installing Fonts (iOS 7 onwards)</h2>
<p>
   Some keyboards require special fonts that do not come standard with your iPhone or iPad. For keyboards that use these fonts, the Keyman app will provide a download of the font to install onto your device, meaning all apps will be able to correctly display the font. To install the font, touch <span class="command">Install</span>.
   <br/>
   <img src="<?php echo cdn("img/app/font-dl1.png"); ?>" />
   <br/><br/>
   You will then be taken to your device settings, and asked to install a profile for the font. Touch <span class="command">Install</span>.
   <br/>
   <img src="<?php echo cdn("img/app/font-dl2.png"); ?>" />
   <br/><br/>
   Then <span class="command">Install</span> again in the Consent page.
   <br/>
   <img src="<?php echo cdn("img/app/font-dl3.png"); ?>" />
   <br/><br/>
   Once the profile is installed, touch <span class="command">Done</span>.
   <br/>
   <img src="<?php echo cdn("img/app/font-dl4.png"); ?>" />
   <br/><br/>
   And then <span class="command">Touch now to return to Keyman</span>.
   <br/>
   <img src="<?php echo cdn("img/app/font-dl5.png"); ?>" />
   <br/><br/>
   The font is now successfully installed, and will display correctly throughout your device!
</p>
<h2>Installing Custom Keyboards</h2>
<p>
  Step 1) Click the link to your custom keyboard json file. (Note: typing the link into your browser URL bar won't work, you will need to include the link in a web page or email)
  <img src="<?php echo cdn("img/app/url-screeni.png"); ?>" />
  <br/>
  Step 2) Click 'Download'. This will fetch the keyboard and font specified from the json file:
  <img src="<?php echo cdn("img/app/install1i.png"); ?>" />
  <br/>
  The keyboard may also prompt you to install a font -- you should click 'Install' and follow the steps:
  <img src="<?php echo cdn("img/app/install2i.png"); ?>" />
  <br/>
  Once the keyboard has been downloaded, you should be able to use it as normal.
  <br/>
  To learn how to create a custom installable keyboard, <a href="http://help.keyman.com/developer/<?php echo $stable_version; ?>/guides/distribute/">click here</a>.
</p>
<h2>Use the Keyman Browser (Pro Edition)</h2>
<p>
  Step 1) Click the Keyman Browser button in the Keyman Pro app
  <br/>
  Step 2) Enter the URL of a website to visit into the address bar, for example <strong>google.com</strong>  Keyman Browser will load
  the page and detect your language if it is present, and reformat it to show your language instead of square boxes.
  <br/>
  Step 3) Use the bookmark button to save the current page for browsing later.
  <br/>
  Step 4) Use the Globe icon to swap between languages.
</p>

<h2>Integrate Keyman with your App or Website</h2>
<p>
   If you are interested in learning how Keyman can be integrated into your own app or website, visit <a href="http://www.keyman.com/engine/">www.keyman.com/engine</a>
</p>
<h2>Further Help</h2>
<p>
   For more information on Keyman, visit <a href="http://keyman.com">www.keyman.com</a>
</p>
    </div>
</body>
</html>
