<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Robert M. Erickson">
        <title>Git - Working Alone</title>
    </head>
    <!-- **********************     Body section      ********************** -->
    <body id="git-alone">
<article id="assignments" class ="lab">
    <h1>GIT setup Working Alone</h1>

    <figure class="img-left onehundred"><img src="//rerickso.w3.uvm.edu/Blackboard-live/cs142/images/github.jpg" alt=""><figcaption>Git work flow model</figcaption></figure>

    <p>The work flow process that we will be using for this class is to work on your computer and sftp (run your NetBeans project) your files to cs142/<em>dev-folderName</em> folder to make sure it works. When it works you then go to your computer using git and commit your changes and push to gitlab. Then you will ssh to the server and go to your live folder where you  pull down from git lab. It is very important that you never ftp (sftp) to the live folders. So lets get this all set up. In the end your live sites will now be ready (right now it is just your sitemap and lab 1.</p>

<div style="text-align: center; border-radius: 0.2em; margin-left: 2em; margin-right: 1em; padding: 0.5em;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLxWIQk1hqg0_8M-snr4d9dltV_-8GoDgt" frameborder="0" allowfullscreen></iframe>
    <div style="color: #839e99; font-style: italic; text-align: center;">Demonstration of the git work flow process</div>
</div>


    <p> Git has a great <a href="https://try.github.io/levels/1/challenges/2" target="_blank">tutorial</a> to help the beginner.</p>

    <form id="labForm" name="labForm">

        <label><input type="checkbox"> Before starting this lab be sure to have <a href="https://git-scm.com/downloads" target="_blank">git installed</a> on your computer.</label>
        
<label><input type="checkbox"> Create a sitemap for this class.</label>

        <label><input type="checkbox"> Create a <a href="https://gitlab.uvm.edu" target="_blank">gitlab account</a> at uvm (just sign in with your uvm account).</label>

        <label><input type="checkbox"> Create a new GitLab project named CS-142-lab1.</label>

        <label><input type="checkbox"> Keep the content of the first Gitlab page (has all the git commands) in a text file in your lab folder named gitcommands.txt. Make sure it is SSH as shown below (if it shows https, then click the drop down and choose ssh, then copy the commands):
        <figure>
                <img src="//rerickso.w3.uvm.edu/Blackboard-live/cs142/images/git-lab-ssh.png">
                <figcaption>SSH vs HTTPS</figcaption></figure></label>

        <label><input type="checkbox"> On your computer set up this folder structure (use cs142):
            <figure>
                <img src="//rerickso.w3.uvm.edu/Blackboard-live/cs142/images/cs142-folder-structure.png">
                <figcaption>cs 142 folder structure. NOTE: you will NEVER put anything in the live folders, only the dev folders.</figcaption>
            </figure>
        </label>

        <label><input type="checkbox"> Set up your cs142/<span class="highlight">dev-lab1</span> folder to be a git repo (git init) on your computer.
            <div style="text-align: center; border-radius: 0.2em; margin-left: 2em; margin-right: 1em; padding: 0.5em;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/fW8Tp4ni81Q" frameborder="0" allowfullscreen></iframe>
                <div style="color: #839e99; font-style: italic; text-align: center;">Setting up your computer to be a git repo.</div>
            </div>

        </label>
        <label><input type="checkbox"> Now connect your local computer to your git repo: 
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> remote add origin git@gitlab.uvm.edu:YOURNAME/YOUR-REPO-NAME.git
                </pre></div>
        </label>
        <label><input type="checkbox"> Add a link to your git repo: https://gitlab.uvm.edu/your-name  on your sitemap (this helps you because we cannot see your repo since it is private :).</label>

        <label><input type="checkbox"> In your dev folder: Create a file named: .user.ini

            <div style="text-align: center; border-radius: 0.2em; margin-left: 2em; margin-right: 1em; padding: 0.5em;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NIZ0Q0aUO2w" frameborder="0" allowfullscreen></iframe>
                <div style="color: #839e99; font-style: italic; text-align: center;">Setting up a .user.ini file to display errors</div>
            </div>

        </label>
        <label><input type="checkbox"> .user.ini has one line in it:
            <div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">display_errors</span> = <span style="color: #009999">1</span>;
                </pre></div>

        </label>

        <label><input type="checkbox"> In your dev folder: Create a file named .gitignore
            <div style="text-align: center; border-radius: 0.2em; margin-left: 2em; margin-right: 1em; padding: 0.5em;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0Fd1-EuZv8g" frameborder="0" allowfullscreen></iframe>
                <div style="color: #839e99; font-style: italic; text-align: center;">Creating a .gitignore file</div>
            </div></label>

        <label><input type="checkbox"> .gitignore should contain this:
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%">.htaccess
.user.ini
ADMIN
nbproject
                </pre></div>

        </label>

        <label><input type="checkbox"> Copy your cs 008 final project into the dev-lab1 folder. NOTE: Do not have cs142/dev-lab1/cs008/lab1/finalproject/index.php but instead have cs142/dev-lab1/index.php</label>


        <label><input type="checkbox"> Run your Netbeans project to sftp (run your NetBeans project) the all files.</label>
        
        
        <label><input type="checkbox"> Check to make sure your final project is working (dev), there should be no change that you can see. Edit any files as needed (ie you may need to edit top.php to point to the CSS file).</label>
        <label><input type="checkbox"> Set up the ssh key on your computer (this step you only need to do once on your computer, the other steps you do for every repo/project)
            <div style="text-align: center; border-radius: 0.2em; margin-left: 2em; margin-right: 1em; padding: 0.5em;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NMNUnI_oIMo" frameborder="0" allowfullscreen></iframe>
                <div style="color: #839e99; font-style: italic; text-align: center;">Setting up ssh key on your computer.</div>
            </div>
        </label>



        <label><input type="checkbox"> Since you are happy with the code you have, add this code to your version
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> add -A
                </pre></div>
        </label>

        <label><input type="checkbox"> When you make a commit you are telling git this version is good:
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> commit -m <span style="color: #aa5500">&quot;message about what you did&quot;</span>
                </pre></div>

            NOTE: If you forget the -m with a message you will go into the vim editor. Press these keys in this order ESC : qw to get out and save</label>

        <label><input type="checkbox"> You send your version to your cloud repo (ie gitlab or github)
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> push origin master</pre></div>
        </label>

        <h2>Set up the live site.</h2>

        <label><input type="checkbox"> Connect to the server and get into your cs 142 folder (not it is minus lower case L):
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">ssh</span> w3.uvm.edu -l yourusername [hit enter, type your password]

<span style="color: #00aaaa">cd</span> www-root/cs142/ [hit enter]
                </pre></div>
        </label>

     <label><input type="checkbox"> Make the live folder:
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%">
        <span style="color: #00aaaa">mkdir</span> live-lab1 [hit enter]
                </pre></div>
        </label>
        <label><input type="checkbox"> Go into the live folder:
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%">
        <span style="color: #00aaaa">cd</span> live-lab1 [hit enter]
                </pre></div>
        </label>
        <label><input type="checkbox"> Set up the ssh key on the server (this step you only need to do once on the server, the other steps you do for every repo/project)
            <div style="text-align: center; border-radius: 0.2em; margin-left: 2em; margin-right: 1em; padding: 0.5em;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8AbSq8wVAwc" frameborder="0" allowfullscreen></iframe>
                <div style="color: #839e99; font-style: italic; text-align: center;">Setting up ssh key on your web server.</div>
            </div>
        </label>
        <label><input type="checkbox"> Check your status, if it is not a repo you will need to initialize it:<!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> status

<span style="color: #00aaaa">git</span> init
                </pre></div>
        </label>

        <label><input type="checkbox"> Connect your live folder with the repo (same as connecting your local machine to the repo)
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> remote add origin git@gitlab.uvm.edu:YOURNAME/YOUR-REPO-NAME.git
                </pre></div>
        </label>

        <label><input type="checkbox"> The last step is pull your files down from the repo to your live site.
            <!-- HTML generated using hilite.me --><div style="text-indent:0; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em 2.6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #00aaaa">git</span> pull origin master
                </pre></div>
        </label>

        <label><input type="checkbox"> Check the live site, it should work the same as the dev site except errors and warning do not show.</label>

        <h2>What to submit in blackboard:</h2>
        <p>Since these files are the same as the repo we don't need them all, Just the ones listed below:</p>
<label><input type="checkbox"> View your gitlab repo and print to a pdf so we can see it (named repo.pdf)</label>
        <label><input type="checkbox"> Submit a screen shot of .gitignore named gitignore.png (or .jpg)</label>
        <label><input type="checkbox"> Submit a screen shot of .user.ini named userini.png (or .jpg)</label>
        <label><input type="checkbox"> Add a comment with the URL for your live site ex:<br>http://YOUR-USER-NAME.w3.uvm.edu/cs142/live-lab1 (should of course also be on your sitemap).</label>
        <label><input type="checkbox"> Remember your site map should have a link to each file, including all the images above. Normally we don't include images but these images are for grading purposes.</label>
    </form>
    
    <h2>NOTE:</h2>
    <p>This is how you will set up every project EXCEPT you will not have to do the keys as they are already set up</p>
</article>
</body>
</html>
