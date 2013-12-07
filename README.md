Tiny Tiny RSS plugins
=====================

This repository is prepared for plugins and pull requests for Tiny Tiny RSS.

Plugins
-------

- Replace http scheme in nicovideo with ff-http (af_nicoscheme). I registered ff-http scheme to invoke Firefox to view nicovideo by Firefox only.
- More google reader keys (googlereaderkeys). If the pull requests below are merged, I will propose a pull request.

Pull requests
-------------

- Noexpand with noscroll (not yet merged, https://github.com/gothfox/Tiny-Tiny-RSS/pull/256 ).
- Prevent interpreting as a hotkey prefix when modifiers pressed (not yet merged, https://github.com/gothfox/Tiny-Tiny-RSS/pull/257 ).
- More use of translations in JS (merged, https://github.com/gothfox/Tiny-Tiny-RSS/pull/263 ).
- ja_JP translation (merged, https://github.com/gothfox/Tiny-Tiny-RSS/pull/264 ).

The follwoings are original README

________________________________________________________________________________

Tiny Tiny RSS
=============

Web-based news feed aggregator, designed to allow you to read news from 
any location, while feeling as close to a real desktop application as possible.

http://tt-rss.org (http://mirror.tt-rss.org)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

Copyright (c) 2005 Andrew Dolgov (unless explicitly stated otherwise).

Uses Silk icons by Mark James: http://www.famfamfam.com/lab/icons/silk/

## Requirements

* Compatible web browser (http://tt-rss.org/wiki/CompatibleBrowsers)
* Web server, for example Apache
* PHP (with support for mbstring functions)
* PostgreSQL (tested on 8.3) or MySQL (InnoDB and version 4.1+ required)
		
## Installation Notes

http://tt-rss.org/wiki/InstallationNotes

## See also

* FAQ: http://tt-rss.org/wiki/FrequentlyAskedQuestions
* Forum: http://tt-rss.org/forum
* Wiki: http://tt-rss.org/wiki/WikiStart
