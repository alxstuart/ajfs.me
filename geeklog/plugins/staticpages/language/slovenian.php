<?php

###############################################################################
# slovenian.php-saved as for version 1.4.1
# This is the english language page for the Geeklog Static Page Plug-in!
# language file for geeklog version 1.4.1 beta by mb
# gape@gape.org ; za pripombe, predloge ipd ... pi�i na email
#
# Copyright (C) 2001 Tony Bibbs
# tony@tonybibbs.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_STATIC = array(
    'newpage' => 'Nova stran',
    'adminhome' => 'Skrbnikova stran',
    'staticpages' => 'Stati�ne strani',
    'staticpageeditor' => 'Urejevalnik stati�nih strani',
    'writtenby' => 'Napisal:',
    'date' => 'Nazadnje posodobljeno',
    'title' => 'Naslov',
    'page_title' => 'Naslov strani',
    'content' => 'Vsebina',
    'hits' => 'Zadetkov',
    'staticpagelist' => 'Seznam stati�nih strani',
    'url' => 'URL',
    'edit' => 'Uredi',
    'lastupdated' => 'Nazadnje posodobljeno',
    'pageformat' => 'Oblika strani',
    'leftrightblocks' => 'Levi & desni bloki',
    'blankpage' => 'Prazna stran',
    'noblocks' => 'Ni blokov',
    'leftblocks' => 'Levi blok',
    'addtomenu' => 'Dodaj v meni',
    'label' => 'Nalepka',
    'nopages' => 'V sistemu �e ni stati�nih strani',
    'save' => 'shrani',
    'preview' => 'predogled',
    'delete' => 'izbri�i',
    'cancel' => 'prekli�i',
    'access_denied' => 'Dostop zavrnjen',
    'access_denied_msg' => 'Nedovoljeno posku�a� dostopiti do ene od skrbni�kih stati�nih strani. Vsi poskusi nedovoljenega dostopa na se bele�ijo.',
    'all_html_allowed' => 'Dovoljen je ves HTML',
    'results' => 'Rezultati stati�nih strani',
    'author' => 'Avtor',
    'no_title_or_content' => 'Izpolniti mora� vsaj polji <b>Naslov</b> in <b>Vsebina</b>.',
    'no_such_page_anon' => 'Prosim, prijavi se.',
    'no_page_access_msg' => "To je morda zato, ker nisi prijavljen/a ali pa sploh nisi �lan spletne strani {$_CONF['site_name']}. Za popoln �lanski dostop <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> postani �lan</a> spletne strani {$_CONF['site_name']} .",
    'php_msg' => 'PHP: ',
    'php_warn' => 'Opozorilo: Koda PHP na tvoji strani bo procesirana, �e omogo�i� to mo�nost. Uporabljaj previdno!',
    'exit_msg' => 'Vrsta izhoda: ',
    'exit_info' => 'Omogo�i za Zahtevano prijavno sporo�ilo. Za  navadno varnostno preverjanje pusti okence prazno.',
    'deny_msg' => 'Dostop do te strani je zavrnjen. Morda je bila stran premaknjena/odstranjena ali pa nima� zadostnih dovoljenj.',
    'stats_headline' => 'Najbolj�ih 10 stati�nih strani',
    'stats_page_title' => 'Naslov strani',
    'stats_hits' => 'Zadetki',
    'stats_no_hits' => 'Izgleda, da na tem mestu ni stati�nih strani ali pa �e nikoli ni nih�e nobene pogledal.',
    'id' => 'ID',
    'duplicate_id' => 'Za to stati�no stran izbrani ID je �e v rabi. Izberi prosim drug ID.',
    'instructions' => 'Za spreminjanje ali izbris stati�ne strani klikni na njeno ikono za urejanje spodaj. Za ogled stati�ne strani klikni na naslov tiste, ki jo ho�e� pogledati. Za ustvarjenje nove stati�ne strani klikni na "Ustvari novo" zgoraj. Za ustvarjenje kopije �e obstoje�e stati�ne strani klikni na ikono za kopiranje.',
    'centerblock' => 'Osrednji blok: ',
    'centerblock_msg' => '�e potrdi�, bo ta stati�na stran prikazana kot osrednji blok na glavni strani.',
    'topic' => 'Rubrika: ',
    'position' => 'Polo�aj: ',
    'all_topics' => 'Vse',
    'no_topic' => 'Samo vstopna stran',
    'position_top' => 'Vrh strani',
    'position_feat' => 'Za udarnim �lankom',
    'position_bottom' => 'Dno strani',
    'position_entire' => 'Cela stran',
    'head_centerblock' => 'Osrednji blok',
    'centerblock_no' => 'Ne',
    'centerblock_top' => 'Zgoraj',
    'centerblock_feat' => 'Udarni �lanek',
    'centerblock_bottom' => 'Spodaj',
    'centerblock_entire' => 'Celotna stran',
    'inblock_msg' => 'V bloku: ',
    'inblock_info' => '�e potrdi�, bo ta stati�na stran prikazana v okvirju (bloku).',
    'title_edit' => 'Uredi stran',
    'title_copy' => 'Naredi kopijo te strani',
    'title_display' => 'Prika�i stran',
    'select_php_none' => 'ne izvedi PHP',
    'select_php_return' => 'izvedi PHP (return)',
    'select_php_free' => 'izvedi PHP',
    'php_not_activated' => "Uporaba PHP-ja na stati�nih straneh ni vklju�ena. Za podrobnosti glej <a href=\"{$_CONF['site_url']}/docs/english/staticpages.html#php\">dokumentacijo</a>.",
    'printable_format' => 'Oblika za natis',
    'copy' => 'Kopiraj',
    'limit_results' => 'Omeji rezultate',
    'search' => 'I��i',
    'submit' => 'Oddaj',
    'no_new_pages' => 'Ni novih strani',
    'pages' => 'Strani',
    'comments' => 'Komentarji',
    'template' => 'Template',
    'use_template' => 'Use Template',
    'template_msg' => 'When checked, this Static Page will be marked as a template.',
    'none' => 'None',
    'use_template_msg' => 'If this Static Page is not a template, you can assign it to use a template. If a selection is made then remember that the content of this page must follow the proper XML format.',
    'draft' => 'Osnutek',
    'draft_yes' => 'Da',
    'draft_no' => 'Ne',
    'autotag_desc_staticpage' => '[staticpage: id alternate title] - Displays a link to a static page using the static page title as the title. An alternate title may be specified but is not required.',
    'autotag_desc_staticpage_content' => '[staticpage_content: id alternate title] - Displays the contents of a staticpage.'
);

$PLG_staticpages_MESSAGE15 = 'Komentar je oddan v pregled in bo objavljen, ko ga odobri urednik.';
$PLG_staticpages_MESSAGE19 = 'Stran je uspe�no shranjena.';
$PLG_staticpages_MESSAGE20 = 'Stran je uspe�no izbrisana.';
$PLG_staticpages_MESSAGE21 = 'Ta stran �e ne obstaja. Za ustvarjenje strani prosim izpolni spodnji formular. �e si tu po pomoti, klikni gumb Prekli�i/Cancel.';

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Nadgradnja vti�nika ni podprta.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['staticpages'] = array(
    'label' => 'Stati�ne strani',
    'title' => 'Konfiguracija stati�nih strani'
);

$LANG_confignames['staticpages'] = array(
    'allow_php' => 'Dovoli PHP?',
    'sort_by' => 'Osrednje bloke razvrsti po',
    'sort_menu_by' => 'Menijske vpise razvrsti po',
    'sort_list_by' => 'Skrbnikov seznam razvrsti po',
    'delete_pages' => 'Izbri�i strani skupaj z lastnikom?',
    'in_block' => 'Uokviri stran v blok?',
    'show_hits' => 'Prika�i zadetke?',
    'show_date' => 'Prika�i datum?',
    'filter_html' => 'Filtriraj HTML?',
    'censor' => 'Cenzuriraj vsebino?',
    'default_permissions' => 'Prednastavljene pravice strani',
    'autotag_permissions_staticpage' => '[staticpage: ] Permissions',
    'autotag_permissions_staticpage_content' => '[staticpage_content: ] Permissions',
    'aftersave' => 'Po shranitvi strani',
    'atom_max_items' => 'Najve� strani v feed-u spletnih storitev',
    'meta_tags' => 'Omogo�i Meta Tags',
    'comment_code' => 'Prednastavljeni komentarji',
    'draft_flag' => 'Prednastavljena kot osnutek',
    'newstaticpagesinterval' => 'Interval nove stati�ne strani',
    'hidenewstaticpages' => 'Skrij nove stati�ne strani',
    'title_trim_length' => 'Kraj�anje dol�ine naslova',
    'includecenterblocks' => 'Vklju�i stati�ne strani osrednjega bloka',
    'includephp' => 'Vklju�i stati�ne strani s PHP',
    'includesearch' => 'Omogo�i stati�ne strani pri iskanju',
    'includesearchcenterblocks' => 'Vklju�i stati�ne strani osrednjega bloka',
    'includesearchphp' => 'Vklju�i stati�ne strani s PHP'
);

$LANG_configsubgroups['staticpages'] = array(
    'sg_main' => 'Glavne nastavitve'
);

$LANG_tab['staticpages'] = array(
    'tab_main' => 'Static Pages Main Settings',
    'tab_whatsnew' => 'What\'s New Block',
    'tab_search' => 'Search Results',
    'tab_permissions' => 'Default Permissions',
    'tab_autotag_permissions' => 'Autotag Usage Permissions'
);

$LANG_fs['staticpages'] = array(
    'fs_main' => 'Splo�ne nastavitve stati�nih strani',
    'fs_whatsnew' => 'Blok Kaj je novega',
    'fs_search' => 'Rezultati iskanja',
    'fs_permissions' => 'Prednastavljene pravice',
    'fs_autotag_permissions' => 'Autotag Usage Permissions'
);

// Note: entries 0, 1, 9, 12, 17 are the same as in $LANG_configselects['Core']
$LANG_configselects['staticpages'] = array(
    0 => array('Da' => 1, 'Ne' => 0),
    1 => array('Da' => 'velja', 'Ne' => 'ne velja'),
    2 => array('Datum' => 'date', 'ID strani' => 'id', 'Naslov' => 'title'),
    3 => array('Datum' => 'date', 'ID strani' => 'id', 'Naslov' => 'title', 'Nalepka' => 'label'),
    4 => array('Datum' => 'date', 'ID strani' => 'id', 'Naslov' => 'title', 'Avtor' => 'author'),
    5 => array('Skrij' => 'hide', 'Prika�i - uporabi spremenjeni datum' => 'modified', 'Prika�i - uporabi ustvarjeni datum' => 'created'),
    9 => array('Naprej na stran' => 'item', 'Prika�i seznam' => 'list', 'Prika�i vstopno stran' => 'home', 'Prika�i skrbnikovo stran' => 'admin'),
    12 => array('Ni dostopa' => 0, 'Samo za branje' => 2, 'Branje-pisanje' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    17 => array('Komentarji omogo�eni' => 0, 'Komentarji onemogo�eni' => -1)
);

?>
