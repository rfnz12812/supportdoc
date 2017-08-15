<html>
    <head>
        <script type="text/javascript">
        function runProgram()
        {
            var shell = new ActiveXObject("WScript.Shell");                 
            var appWinMerge = "\"C:\\Program Files\\WinMerge\\WinMergeU.exe\" /e /s /u /wl /wr /maximize";
            var fileLeft = "\"D:\\Path\\to\\your\\file\"";
            var fileRight= "\"D:\\Path\\to\\your\\file2\"";
            shell.Run(appWinMerge + " " + fileLeft + " " + fileRight);
        }
        </script>
    </head>

    <body>
        <a href="javascript:runProgram()">Run program</a>
    </body>
</html>




The reasonable way how to launch apps from HTML is through url schemes. So you can launch email via mailto: links and irc through irc: links. Individual apps can implement these schemes, but I'm not sure WinMerge does this.
shareimprove this answer
	
answered May 10 '10 at 3:03
Jakub Hampl
27.4k65497
	
add a comment
up vote
1
down vote
	

Make a batch file and call the bacth file in Window.open. Here how it works

    make a file in notepad
    write your script : start wmplayer "\dotnet\sc\1234.mp4" /fullscreen
    save as : test.bat in \dotnet\sc\test.bat

in html

window.open('file://dotnet/sc/test.bat')

Enjoy..



How to execute a Local File using HTML Application?
Kunal Chowdhury «IN», 28 Sep 2010 CPOL
	   3.78 (9 votes)
	
Rate this: 	
vote 1vote 2vote 3vote 4vote 5
	
How to execute a Local File using HTML Application?

Did you ever want to run an application from your local resource inside your HTML page? If so, you will face some issues. It will never run any application from local resource directly. It may ask you to download the file before running it. This is due to browser security issue as the code runs inside the browser sandbox.

So, what to do for this? In this post, I will describe the steps to do this. Read the complete post in order to learn the same.

As I mentioned above, you can't run an application from a browser window due to security reasons. To execute file, you need to use .HTA applications (which is an HTML application). HTA applications run outside the browser window just like a normal application and have full trust support.

If you are new to HTML application, read more about it here.

Let’s jump to create one HTML application to launch Notepad for you (without any security warnings). To do this, design your HTML page with a button, which will execute the Notepad once clicked. You can set some application specific properties using the <HTA:APPLICATION /> tag. This step is optional. Add the following JavaScript code inside your <head /> tag:
Hide   Copy Code

<script type="text/javascript" language="javascript">
    function RunFile() {
    WshShell = new ActiveXObject("WScript.Shell");
    WshShell.Run("c:/windows/system32/notepad.exe", 1, false);
    }
</script>

Here, you can see that first I am creating the instance of the “WScript.Shell” ActiveXObject and then calling the Run() method of the newly created object with proper parameters.

Now, from the button click event, give a call to the JavaScript method named “RunFile()”. Once you click on the button, it will execute the file mentioned in the Run() method.

If you run this code inside the browser, it will not work. To resolve this, just save the file with a .hta extension. You will see that the file icon has changed to an application icon. If you double click on this file, it will execute and open a Window having the button inside it. Click the button to open the notepad.exe file.

Here is the full code for that:
Hide   Copy Code

<html>
<head>
    <title>Application Executer</title>
    <HTA:APPLICATION ID="oMyApp" 
	    APPLICATIONNAME="Application Executer" 
	    BORDER="no"
	    CAPTION="no"
	    SHOWINTASKBAR="yes"
	    SINGLEINSTANCE="yes"
	    SYSMENU="yes"
	    SCROLL="no"
	    WINDOWSTATE="normal">
    <script type="text/javascript" language="javascript">
        function RunFile() {
		WshShell = new ActiveXObject("WScript.Shell");
		WshShell.Run("c:/windows/system32/notepad.exe", 1, false);
        }
    </script>
</head>
<body>
	<input type="button" value="Run Notepad" onclick="RunFile();"/>
</body>
</html>

So, what is the purpose of it? You may need it for various reasons, but that will depend on your requirement. Recently, I needed it to do one ongoing R&D and this concept helped me a lot. Hence, I thought of sharing this with you so that you can also learn and use it as per your requirement.


