https://github.com/proojekte/auto/wiki

***

# Introduction to Auto

Auto is an open and well-designed automation system.

* [Why do we need automation?](#why-do-we-need-automation)
* [So why are we developing Auto?](#so-why-are-we-developing-auto)
* [Why do we not use tools already out there?](#why-do-we-not-use-tools-already-out-there)
* [Abstract](#abstract)
* [Interaction example](#interaction-example)
* [Further interaction example](#further-interaction-example)
* [Auto only does what you would do](#auto-only-does-what-you-would-do)
* [Auto simplifies using of cool but complex stuff](#auto-simplifies-using-of-cool-but-complex-stuff)

## Why do we need automation?

Administrating, developing and using technology can be very complex and time consuming; and sometimes too complex and too time consuming to get things done the right way; especially when you want to achieve something else and just need an easy tool to get your work done.

If you never thought that doing things with technology should be simpler and less time consuming, Auto will not make you happy. Even if googling is good enough for you, Auto would probably be too much overhead for you.

## So why are we developing Auto?

Because we need and want something, that simplifies administrating, developing and using technology based on Windows, Mac OS X, iOS, GNU/Linux and Android.

> Complexity is an obstacle; even if you are a technology professional.

Even technology professionals are human. We have lifes, partners, kids, friends and clients. Even our brains have limited capacities. Keeping this in mind we prefere simple things that works the right way out of the box.

But also we love experimenting; testing bleeding edge technologies. Thus we need and want an easy way to safely test things and undo changes if something went wrong; of course without loosing imporant data. And we want to record workflows and play them 10 times, or 100 times, or 1 gazillion times.

Last but not least, we love optimizing workflows. Designing things that just works the right way out of the box is fun. ;-)

## Why do we not use tools already out there?

Of course we build up on already available tools. We really do not want to reinvent the wheel. We are thankful for any solution that we do not have to develop ourselves.

What we want is an unified interface to every technology on every plattform that we use. And we want to minimize manual effort; for administrators, developers and users, cause we are administrators, developers and users.

But ...

> If something can be better, we want it to be better.

Coupled with curiosity that is exactly why humanity evolves.

We want to put our knowledge and super powers together to create an automation system that makes things easy without reinventing the wheel.

Here comes Auto to the stage.

## Abstract

Auto is build up on well-designed and proven conventions. It simplifies administration, development and usage of technology through a unified and assistive user interface. Thus Auto helps you staying focused and getting things done; even, if you are not a professional in every technology Auto covers.

Okay. Enough advertising. Let Auto explain itself.

## Interaction example

`user@domain@host:~$` **`auto`**

    What do you want to automate?
    
    Hint:
    
        auto help

`user@domain@host:~$` **`auto help`**

    Auto is an open and well-designed automation system.

    Visit https://github.com/proojekte/auto/wiki to get an overview.

    Main usage scheme:

        auto <command> [<target>] [if <event>]
    
    Hint:
    
        auto list commands

`user@domain@host:~$` **`auto list commands`**

    backup, config, copy, delete, diff, hash, help, install, record, show, snapshot,
    start, stop, sync, upgrade, ...
    
    Example:
    
        auto help

As you can see, using Auto feels natural; like talking with a personal technology assistant.

## Further interaction example

`user@domain@host:~$` **`auto backup`**

    You will get a snapshot of all your personal data and software. Location:

    /backup/domain/host/user/<date>/<time>/

    Also you will get log files of every step and its result. Location:

    /chroot/domain/host/user/var/log/auto/<date>/<time>/

    Commands, that will be used:

        1. auto start    workflow
        2. auto snapshot user
                         backup:<date>/<time>
        3. auto delete                                      backup:next
        4. auto move                          backup:latest backup:next
        5. auto link     backup:<date>/<time> backup:latest
        6. auto compare                       backup:latest backup:next
        7. auto stop     workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

Whenever it seams usefull, Auto tells you in front of every automation what it tries to reach for you, which commands it will use and how to start the workflow. This way it is always safe to just guess a command and look if it results in something you want.

Of couse Auto even tells you what is going on right now and if everthing went well.

`user@domain@host:~$` **`auto start`**

    Okay. Let's backup.

        1. auto start workflow

    done.

        2. auto snapshot user backup:2015-04-15/16-08-04

    done.

        3. auto delete backup:next

    done.

        4. auto move backup:latest backup:next

    done.

        5. auto link backup:2015-04-15/16-03-09 backup:latest

    done.

        6. auto compare backup:latest backup:next

    1 file added.
    2 files deleted.
    3 files changed.

        7. auto stop workflow

    Well done.

    Detailed log files of every step and its result are stored here:

    /chroot/domain/host/user/var/log/auto/2015-04-15/16-08-04/

## Auto only does what you would do

Auto does not reinvent the wheel. Ultimately it simply executes commands for you; the way you would do it if you would have enough time to be a specialized professional in every technology Auto covers.

`user@domain@host:~$` **`auto sync`**

    All your personal data and software will be synced bidirectional with
    user@domain@server.

    Also you will get log files of every step and its result. Location:

    /chroot/domain/host/user/var/log/auto/<date>/<time>/

    Commands, that will be used:

        1. auto start   workflow
        2. auto backup
        3. auto execute "rsync -a -b -c -X -Y -Z -1 -2 -3 <uri 1> <uri 2>"
        4. auto backup
        5. auto stop    workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

Auto respects vendor and software standards; and of course your server or device configuration. Thus you can start and stop using Auto whenever you want. It is upon you to decide if you automate just one aspect of one server or device, or if you automate your entire technology stack with Auto.

## Auto simplifies using of cool but complex stuff

Do you know Time Machine from Apple? You can use Auto to revert your data or software to any point in time where a snapshot has been created. Auto makes it usable on all servers and devices; plattform indipendend of course.

`user@domain@host:~$` **`auto undo upgrade thunderbird`**

    You have upgraded Mozilla Thunderbird two days ago.

    Undo reverts the following changes the upgrade caused:

    1. a
    2. b
    3. c
    4. X
    5. Y
    6. Z

    Also you will get log files of every step and its result. Location:

    /chroot/domain/host/user/var/log/auto/<date>/<time>/

    Commands, that will be used:

        1. auto start  workflow
        2. auto backup
        3. auto undo   backup:2015-04-12/10-11-12
        4. auto backup
        5. auto stop   workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

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
