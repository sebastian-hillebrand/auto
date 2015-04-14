https://github.com/proojekte/auto/wiki

***

# Introduction to Auto

Auto is an open and well-designed automation system.

> Auto what?!

If you never thought that doing things with technology should be simpler and less time consuming, Auto will not make you happy.

Also, technology professionals often think:

> If there is a solution for a problem, google knows it.

So. Why are we developing Auto?

Because it is needed, we are good in optimizing workflows and it is fun. :-)

***

> We are technology professionals, but we are also human. We have lifes, wifes and kids. Why should we not have more spare time to play with our kids; or with cool new stuff?

***

Yes. Google can guide us to a lot of really cool solutions out there. But even here the problem starts.

Probably all administrators, developers and users are searching (more or less often) instructions to do something with technology instead of just using it.

Have you ever calculated how often you asked google? How often you failed to rely on "user generated content"? How often you failed because things are to complex?

This all is consuming valuable time. Most time without need.

***

> Did you ever asked yourself if googling is really the one and only solution to get things done with technology?

***

We did. And we were doing it more and more often with each additional or complexity gaining requirement.

Complexity is an obstacle; even if you are a technology professional.

On the first side even almost every tech pro loves open and efficient technologies that just works. But on the other side we also love experimenting with cool new stuff on Windows, Mac OS X, iOS, GNU/Linux and Android (for example).

***

> So why should we all always reinvent the wheel with self made scripts over and over again?

***

What about putting our knowledge and super powers together to create an automation system that helps technology administrators, developers and users getting more spare time to play with their kids; or with cool new stuff?

Here comes Auto to the stage.

## Abstract

Auto is build up on well-designed and proven conventions. It simplifies administration, development and usage of technology through a unified and assistive user interface. Thus Auto helps you staying focused and getting things done; even, if you are not a professional in every technology Auto covers.

Okay. Enough advertising. Let Auto explain itself.

## Interaction example

`user@domain@device:~$` **`auto`**

    What do you want to automate?
    
    Hint:
    
        auto help

`user@domain@device:~$` **`auto help`**

    Auto is an open and well-designed automation system.

    Visit https://github.com/proojekte/auto/wiki to get an overview.

    Main usage scheme:

        auto <command> [<target> [if <event>]]
    
    Hint:
    
        auto list commands

`user@domain@device:~$` **`auto list commands`**

    backup, config, copy, delete, diff, hash, help, install, record, show, snapshot,
    start, stop, sync, upgrade, ...
    
    Example:
    
        auto help

As you can see, using Auto feels natural; like talking with a personal technology assistant.

## Further interaction example

`user@domain@device:~$` **`auto backup`**

    You will get a snapshot of all your personal data and software. Location:

    /backup/user@domain@device/<date>/<time>/

    Also you will get log files of every step and its result. Location:

    /chroot/user@domain@device/var/log/auto/<date>/<time>/<command>.<result>.log

    Commands, that will be used:

        1. auto start    workflow
        2. auto snapshot user \
                         backup:<date>/<time>
        3. auto delete                                      backup:next
        4. auto move                          backup:latest backup:next
        5. auto link     backup:<date>/<time> backup:latest
        6. auto compare                       backup:latest backup:next
        7. auto stop     workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

Whenever it seams usefull, Auto tells you in front of every automation what it tries to reach for you, which commands it will use and how to start the workflow. This way it is always safe to just guess a command and look if it results in something you want.

## Auto does what you would do

Auto does not reinvent the wheel. Ultimately it simply executes commands for you; the way you would do it if you would have enough time to be a specialized professional in every technology Auto covers.

`user@domain@device:~$` **`auto sync`**

    All your personal data and software will be synced bidirectional with
    user@domain@server.

    Also you will get log files of every step and its result. Location:

    /chroot/user@domain@device/var/log/auto/<date>/<time>/<command>.<result>.log

    Commands, that will be used:

        1. auto start   workflow
        2. auto backup
        3. auto execute "rsync -a -b -c -X -Y -Z -1 -2 -3 <source> <target>"
        4. auto backup
        5. auto stop    workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

## Auto simplifies using cool but complex stuff

Do you know Time Machine from Apple? You can use Auto to revert your data or software to any point in time where a snapshot has been created. Auto makes it usable on all servers and devices; plattform indipendend of course.

`user@domain@device:~$` **`auto undo upgrade thunderbird`**

    You have updated Mozilla Thunderbird two days ago.

    Undo reverts the following changes the update caused:

    1. a
    2. b
    3. c
    4. X
    5. Y
    6. Z

    Also you will get log files of every step and its result. Location:

    /chroot/user@domain@device/var/log/auto/<date>/<time>/<command>.<result>.log

    Commands, that will be used:

        1. auto start  workflow
        2. auto backup
        3. auto undo   backup:2015-04-12/10-11-12
        4. auto backup
        5. auto stop   workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

Last but not least Auto respects vendor and software standards; and of course your server or device configuration. Thus you can start and stop using Auto whenever you want. It is upon you to decide if you automate just one aspect of one server or device, or if you automate your entire technology stack with Auto.

# Impress

    Proojekte GmbH: Acting with insight and foresight.
    Innovative services from highly motivated professionals.

    Phone: +49 2542 889147
    Fax:   +49 2542 889148
    
          www.proojekte.de
    kontakt(a)proojekte.de
    
    CEO:         Christian Wantia
    Address:     Harwick 61, 48712 Gescher, Germany
    Reg. court:  Amtsgericht Coesfeld
    Reg. number: HRB 13094
    VAT ID:      DE 275 978 266

***

https://github.com/proojekte/auto/wiki
