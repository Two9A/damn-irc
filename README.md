# dAmn-IRC Bridge

Connect to DeviantArt's chat network (dAmn) from your IRC client, by running this bridge locally and pointing your IRC client to the bridge.

## Requirements

You'll need PHP (at least 5.5, though this probably works in earlier versions of the 5.x set), with the cURL and DOM extensions. An example installation for Debian:

    $ sudo apt-get install php-cli php-curl php-dom
    $ git clone https://github.com/Two9A/damn-irc
    $ damn-irc/damn-irc
    [20160820173205][IRC] Listening on localhost:8193

## Configuration

A few options can be given to damn-irc:

    $ damn-irc -h
    Two9A's dAmn-IRC bridge, v0.01
    Options:
        -h, --help:        Display this message
        -v, --verbose:     Log detailed network traffic
        -l, --log:         Where to write log entries [stderr]
        -H, --host:        Host for IRC connections [localhost]
        -p, --port:        Port for IRC connections [8193]

Your IRC client will also require configuration: the nick you use on the bridge network should be your DeviantArt username, and the server password should be your DeviantArt password.

It is also advisable for the client to wait a few seconds for authentication before attempting to join channels, to avoid early disconnection.

An example configuration for irssi:

    servers = (
      {
        address = "localhost";
        chatnet = "dAmn";
        port = "8193";
        username = "SomeGuy";
        password = "***";
      }
    );
    chatnets = {
      dAmn = {
        type = "IRC";
        nick = "SomeGuy";
        autosendcmd = "/^wait 5000";
      };
    };
    channels = (
      {
        name = "#devart";
        chatnet = "dAmn";
        autojoin = "Yes";
      };
    );

## Known Issues

- Some clients may exhibit echo: the text you type shown twice. This doesn't seem to happen in irssi, though.
- The list of nicks in channel is not sent to the client, and nicks do not show as having elevated privileges such as voice or op.
- Setting modes has no effect.
- Some dAmn data is not interpreted or piped through, most notably deviation thumbnails. This renders #thumbshare somewhat pointless.

## License

This package contains the [Masterminds HTML5 parser for PHP](https://github.com/Masterminds/html5-php), which is in turn based on html5lib; both are released under the MIT license. This package also contains the [Technosophos QueryPath library](https://github.com/technosophos/querypath), which is released under the MIT license.

dAmn-IRC itself is licensed under the WTFPL, whose full text follows.

    DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
    TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 
    
    0. You just DO WHAT THE FUCK YOU WANT TO.
