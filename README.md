https://github.com/proojekte/auto/wiki

***

# Introduction to Auto

Auto is an open and well-designed automation system.

Auto gets his super power from well-designed and proven conventions. It simplifies administration, development and usage of technology through a unified and assistive user interface. Thus Auto helps you staying focused and getting things done; even, if you are not a professional in every technology Auto covers.

Okay. Enough advertising. Auto is such simple that it explains itself.

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

Let us look further how Auto communicates with you.

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

Also Auto does not reinvent the wheel. Ultimately it simply executes commands for you; the way you would do it if you would have enough time to be a specialized professional in every technology Auto covers.

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

Of course Auto can simply revert your system to any point in time when a backup has been made. But undo can be even more specific.

`user@domain@device:~$` **`auto undo install thunderbird`**

    You have installed Mozilla Thunderbird 2 days ago.

    Undoing reverts the following changes the installation caused:

    1. X
    2. Y
    3. Z
    4. a
    5. b
    6. c

    Also you will get log files of every step and its result.

    /var/log/auto/user@domain@device/<date>/<time>/sync.<command>.<result>.log

    Commands, that will be used:

        1. auto start  workflow
        2. auto backup
        3. auto undo   backup:2015-04-12/10-11-12
        4. auto backup
        5. auto stop   workflow

    To start this workflow, simply repeat your last command, or type:

        auto start

And last but not least Auto respects vendor and software standards; and of course your server or device configuration. Thus you can start and stop using Auto whenever you want. It is upon you to decide if you automate just one aspect of just one server or device, or if you automate your entire technology work and life with Auto.

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
