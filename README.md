# What is this?

Some dude asked questions on IRC, so I answered those.

I just keep my (da_wunder) and codebuster chat messages on this one.

## Chat from `freenode/##php` channel:
```
14:57 < codebuster> would all of this been easier using something else like symfony console component?
14:57 < codebuster> just want to build a menu
14:57 < codebuster> can't find any videos about symfony console component. nothing where I can see a menu in cli anyway
14:58 < da_wunder> codebuster: eg. like this
                   https://github.com/tarlepp/symfony-flex-backend/blob/master/src%2FCommand%2FUser%2FManagementCommand.php#L97-L106
14:59 < codebuster> do I need any installation to use symfony command component? how do I get started?
15:00 < da_wunder> codebuster: that makes you menu like this https://snag.gy/xbdejk.jpg
15:01 < codebuster> don't see anything in link
15:01 < da_wunder> codebuster: and docs for that console component http://symfony.com/doc/current/components/console.html
15:02 < da_wunder> codebuster: it's showing me my screenshot of phpstorm just fine
15:02 < codebuster> okay I see it thanks
15:16 < codebuster> okay so having a crack a symfony component instead. do i need to install the who smyfony framework for this?
15:16 < da_wunder> codebuster: nope, just that console component
15:16 < codebuster> i get error when trying to use Symfony\Component\Console\Application
15:16 < da_wunder> codebuster: as the docs says
15:17 < codebuster> I don't think I have it installed
15:18 < codebuster> so first I need to create a script for the Finder Component
15:18 < codebuster> I did
15:18 < codebuster> I used composer require symfony/finder
15:18 < codebuster> I used composer require symfony/console
15:18 < codebuster> those two
15:19 < codebuster> still something missing I think
15:19 < codebuster> I dont have that Application component
15:20 < codebuster> Undefined constant Symfony\Component\Console\Application
15:21 < codebuster> so you saying simply running composer require symfony/finder took care of everything?
15:21 < da_wunder> codebuster: working just fine, https://snag.gy/Jkf4FA.jpg
15:21 < codebuster> right now it is like this? https://pastebin.com/qnGZ7DSf
15:22 < codebuster> yes
15:23 < da_wunder> codebuster: i have quite similar code (just created new one) and it runs like expected - as the screenshot shows
15:23 < codebuster> my console.php file is right outside the vendor folder
15:23 < codebuster> maybe directory problem
15:23 < codebuster> what does __DIR__ mean?
15:24 < codebuster> that is very much like the error I am getting
15:25 < codebuster> just says PHP Fatal error: Uncaught Error: Undefined constant 'Symfony\Component\Console\Application
15:25 < da_wunder> codebuster: here is simple repo for that https://github.com/tarlepp/codebuster
15:26 < da_wunder> codebuster: just clone that and run composer install, and after that php application.php
15:29 < codebuster> thanks mate
15:29 < codebuster> okay now I can run php application.php without problems
15:29 < codebuster> I get a command tool screen
15:29 < codebuster> how do I begin to construct the menu I want?
15:29 < da_wunder> codebuster: look at symfony docs
15:29 < da_wunder> codebuster: all is explained quite well there
15:30 < da_wunder> codebuster: first you need to create your command class, then register that to that console application
15:35 < da_wunder> codebuster: updated that repo for you
15:36 < da_wunder> codebuster: so just pull latest and then run php application.php menu
15:37 < codebuster> thanks man. you are golden
15:37 < da_wunder> codebuster: but i recommend that you take closer look of symfony docs
15:39 < codebuster> I guess I need to add a configure function right
15:39 < codebuster> how to actually call the menu?
15:39 < codebuster> php bin/console app:menu
15:39 < da_wunder> codebuster: just run 'php application menu'
15:41 < codebuster> yeah it says could not open input file menu
15:41 < da_wunder> codebuster: you should see results like https://snag.gy/6L4ns5.jpg
15:42 < codebuster> its working!
15:42 < codebuster> thanks
15:46 < codebuster> Now do I just create seperate commands for each menu item?
15:46 < codebuster> use same logic?
15:51 < codebuster> how do I link menu items to actually link to an action?
15:52 < da_wunder> ^
15:53 < codebuster> the documentation and what is shown here look different. documentation has commands such as php bin/console
                    app:create-user for menu items
15:54 < da_wunder> codebuster: but the basics are just the same
15:55 < da_wunder> codebuster: tl;dr you cannot just copy paste doc code and expect that to work
15:56 < da_wunder> and that is not rocket science, just basic code
15:59 < codebuster> it is not clear for the documentation if I have build a sepearate command for each of my menu items, such as add,
                    edit, remove etc
16:00 < codebuster> documentation doesn't show how to link the command
16:00 < codebuster> so separate files?
16:00 < da_wunder> it's your application logic, you can make those all to separated commands, or you can create those all to same file
16:05 < da_wunder> codebuster: one more time
16:05 < da_wunder> codebuster: updated that repo
16:09 < codebuster> thanks man
16:09 < codebuster> there seems to be numerous ways of doing the same thing
16:09 < da_wunder> usually there is
16:10 < da_wunder> like going from A to B, you can walk, run, use car, etc.
16:10 < codebuster> for example. if I am entering the first name of a person, I can use readline within the setName function of that
                    class, or I can use the console command approach to enter those details.
16:11 < da_wunder> codebuster: once again, you should read those docs
16:12 < codebuster> is it a good idea to mix them. would using something like
                    $output->writeln('firstname'.$input->getArgument('firstname'); a better way to get that info or simply call my
                    setMethod name already implemented in my class and not worry about it
16:13 < da_wunder> codebuster: once again, you should read those docs
16:34 < codebuster> can I have question for the user to interact with outside the execute function?
16:35 < codebuster> yes I was looking at that
16:35 < codebuster> now examples of that in documentation though
16:36 < da_wunder> codebuster: i highly recommend that you read all those console command docs, and then start to build your console
                   application
16:36 < da_wunder> codebuster: it won't take a long
16:36 < codebuster> so do I just write most of what is written in interact instead?
16:40 < codebuster> nothing about interact in documentation
16:40 < codebuster> no examples
16:42 < da_wunder> codebuster: it's just method that you could use
16:43 < da_wunder> codebuster: is this what you're looking for https://github.com/tarlepp/codebuster/blob/master/MenuCommand.php#L39 ?
16:43 < da_wunder> codebuster: once again updated that repo
16:44 < codebuster> yeah man. Seeing actual examples really helps
16:44 < codebuster> the documentation has everthing written in execute
16:44 < da_wunder> codebuster: but really i highly recommend that you read _all_ of those console docs
16:44 < codebuster> makes it more confusing
16:44 < codebuster> i haven't worked with cli before
16:45 < da_wunder> codebuster: those are just basic classes, which have methods that you use
16:45 < da_wunder> nothing cli specified there
16:45 < codebuster> confusing thing for me is how to simply enter values for my variables in my class such as first name, last name
                    etc
16:45 < da_wunder> codebuster: take a pull of that repo that i made for you and try it yourself
16:45 < codebuster> so thinking of myobj = new Student($firstname, $lastname) which has now been entered through the cli
16:46 < da_wunder> codebuster: $firstname = $this->io->ask('What is your firstname); ...
16:46 < codebuster> so in the CLI I can enter firstname from CLI and save it in $firstname and pass it on to my class method which
                    handles the rest
16:47 < da_wunder> codebuster: if you read those docs, all this would be must clearer for you
16:47 < da_wunder> codebuster: so fourth time, i highly recommend that you read _all_ of those console docs first, and after that
                   start to build your console application
16:50 < codebuster> okay
16:51 < codebuster> I think that sorts out most my questions.
16:52 < codebuster> one last thing. If I create my Student class object in one of those methods like method A, can I then make method
                    calls on that object in the other methods such as methodB? So like methodA creates object. MethodB, will have
                    $obj->getName()
16:53 < da_wunder> codebuster: you should also read http://php.net/manual/en/language.oop5.php
17:21 < codebuster> so my application ends before I can run other menu and use my get methods to see if anythig has actually changed.
                    how do I stop my application from exiting?
17:22 < da_wunder> codebuster: in that time you have not read all those docs
17:28 < codebuster> wasn't using symfony cli than.
17:30 < codebuster> with me?
17:30 < codebuster> I remember the while loop, but that was before the symfony cli
17:30 < codebuster> symfony component probably has better way
17:31 < codebuster> already have
17:32 < codebuster> doesn't seem to apply for cli anymore. otherwise keeps looping
17:43 < da_wunder> codebuster: sure it will apply
17:44 < da_wunder> if it does not apply, your application logic has some flaws
18:21 < codebuster> thanks da_wunder
```

## Chat from `freenode/#symfony` channel:
```
17:29 < codebuster> how do I stop my application from exiting in symfony cli?
17:29 < codebuster> I can't get to different menus without it exiting
17:29 < da_wunder> codebuster: it's your application logic
17:30 < da_wunder> codebuster: and still i highly recommend that you read those docs first
17:30 < da_wunder> as i have asked multiple times
17:34 < codebuster> do I call the menucommand to get the menu showing again?
17:35 < da_wunder> codebuster: share your code, eg github repo, so that we can take a closer look of your problem
17:38 < codebuster> its the same thing as you already have in repo. Just trying to figure out how to go back to menu after a
                    selection is made and input are done. It should exit unless the person choose to exit the application from the
                    menu
17:38 < da_wunder> ..
17:39 < da_wunder> so just your application logic then
17:39 < da_wunder> codebuster: one way
                   https://github.com/tarlepp/symfony-flex-backend/blob/master/src%2FCommand%2FUser%2FManagementCommand.php#L74
17:40 < da_wunder> codebuster: and those choices within that are
                   https://github.com/tarlepp/symfony-flex-backend/blob/master/src%2FCommand%2FUser%2FManagementCommand.php#L32-L40
17:42 < da_wunder> codebuster: once again updated that repo that i provided for you earlier
17:53 < codebuster> that is it.
17:54 < codebuster> one weird thing I noticed. writeln doesn't accept backspace in console. showing weird characters when I try to
                    delete.
17:54 < da_wunder> writeln ?
17:55 < da_wunder> if you're asking some question, it will accept backspace just fine
17:55 < da_wunder> codebuster: if you have cloned that repo that i made for you earlier, just update it and run that command
17:55 < da_wunder> and see that backspace is working just fine
17:56 < codebuster> or maybe it is actually the $this->io->ask that doesn't like backspaces
17:56 < da_wunder> working like a charm here
17:56 < codebuster> the first one allows backspaces, but once inside that menu, backspace shows up as characters
17:57 < da_wunder> not seeing that at all
17:58 < da_wunder> but don't know what you're doing in your code so hard to guess
17:58 < codebuster> maybe my virtualbox is messed up. running this on linux on my windows machine vb
17:58 < da_wunder> i'm doing the same
17:58 < da_wunder> actually have done that years now
18:00 < codebuster> okay, no worries
18:00 < codebuster> what about clearing the screen. is that possible? rather than having the menu appear below the previous menu?
18:02 < da_wunder> eg. with $output->write(sprintf("\033\143"));
18:04 < da_wunder> but with that you could get multiple problems
18:07 < codebuster> multiple problems? what do you mean?
18:07 < codebuster> one thing that confused me with your approach and the documentaation was the differences with
18:08 < da_wunder> eg if you run that in last in your while loop, and then you want to show something to user with actual action
                   method - what happens ?
18:08 < codebuster> app:create-user parts
18:08 < da_wunder> codebuster: what approach exactly ?
18:08 < codebuster> they call their menus with app:create-user but in yours its the menu number
18:09 < da_wunder> codebuster: that is just my application logic
18:09 < codebuster> so for instance I am looking at the documentation where they write a testexecute, but they are using
                    app:Create-user
18:09 < da_wunder> codebuster: if you want to from A to B you can walk, run, use car, etc.
18:09 < codebuster> in my case, I don't know what I need to write instead of the app:create-user
18:10 < da_wunder> on where ?
18:10 < codebuster> I am reading symfony.com/doc/current/console.html testing section
18:10 < codebuster> testing commands
18:10 < codebuster> the find part
18:10 < codebuster> how would I find it. its different
18:11 < da_wunder> codebuster: if you type 'php application.php'
18:11 < da_wunder> codebuster: see that you have a list of available commands there
18:12 < codebuster> okay thanks
18:12 < codebuster> just for future reference, does a menucommand need further submenu commands, or is that overkill?
18:12 < da_wunder> + that testing part is assuming that you're using whole symfony framework, not just that console component
18:13 < da_wunder> codebuster: that is hard to say, because that is your application logic - and i don't know what you're trying to do
18:13 < codebuster> well in simple projects
18:14 < codebuster> man you should be a teacher
18:14 < codebuster> where you from?
18:14 < da_wunder> finland
18:14 < codebuster> cool
18:15 < codebuster> haven't come across anybody as helpful as you before online
18:15 < codebuster> cheers
18:16 < codebuster> do you know anything about packaging this? I mean is it possible with symfony cli to create an installation
                    package? Like zip everything and than use like an install command?
18:31 < da_wunder> sure just look https://packagist.org/
18:37 < codebuster> thanks a million
18:38 < codebuster> can you do me one last favour?
18:48 < codebuster> can you remove the repo for this or make it private please?
18:48 < da_wunder> why ?
18:48 < da_wunder> it was just an example for you
18:49 < da_wunder> why would i remove that or make it private ?
18:50 < codebuster> it was, but I am learning this in order to work on my project. And even though I have my own separate classes and
                    methods, there are still some similarities in my menu with what you have taught me.
18:50 < da_wunder> still don't see the point
18:51 < codebuster> I get paranoid, and worry easily
18:51 < da_wunder> worry about example code :D
18:51 < codebuster> its true, what you have there is no different than a documentation.
18:51 < codebuster> but the date of your committed code is what makes me worried.
18:52 < da_wunder> sounds like you've been doing some school / job interview project...
18:52 < codebuster> sounds like that xd
18:52 < codebuster> would sleep better if it wasn't online
18:52 < da_wunder> and one more reason not to remove that
18:55 < codebuster> :-(
18:56 < codebuster> please
18:56 -!- codebuster [~chatzilla@95.150.254.196] has quit [Quit: ChatZilla 0.9.93 [Firefox 54.0.1/20170628075643]]
```