<?php

###############################################################################
# hebrew_utf-8.php
#
# This is the Hebrew language file for the Geeklog Links Plugin
#
# Copyright (C) 2009
# http://lior.weissbrod.com
# Version 1.6.1#1
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

$LANG_LINKS = array(
    10 => 'הגשות',
    14 => 'קישורים',
    84 => 'קישורים',
    88 => 'אין קישורים חדשים מהזמן האחרון',
    114 => 'קישורים',
    116 => 'הוספת קישור',
    117 => 'דווחו על קישור שבור',
    118 => 'דיווח קישור שבור',
    119 => 'הקישור הבא דווח כשבור: ',
    120 => 'כדי לערוך את הקישור, ליחצו כאן: ',
    121 => 'הקישור השבור דווח על ידי: ',
    122 => 'תודה לכם על שדיווחתם על קישור שבור זה. המנהלים יתקנו את הבעיה ברגע שיוכלו',
    123 => 'תודה לכם',
    124 => 'עיברו',
    125 => 'קטגוריות',
    126 => 'אתם כאן:',
    'autotag_desc_link' => '[link: id alternate title] - Displays a link to a Link from the Links Plugin using the Link Title as the title. An alternate title may be specified but is not required.',
    'root' => 'ראשי'
);

###############################################################################
# for stats

$LANG_LINKS_STATS = array(
    'links' => 'קישורים (לחיצות) במערכת',
    'stats_headline' => 'עשרת הקישורים הגדולים',
    'stats_page_title' => 'קישורים',
    'stats_hits' => 'לחיצות',
    'stats_no_hits' => 'נראה שאין שום קישורים באתר זה או שאף אחד עוד לא לחץ על אחד מהם.'
);

###############################################################################
# for the search

$LANG_LINKS_SEARCH = array(
    'results' => 'תוצאות קישורים',
    'title' => 'כותרת',
    'date' => 'תאריך הוספה',
    'author' => 'הוגש על ידי',
    'hits' => 'לחיצות'
);

###############################################################################
# for the submission form

$LANG_LINKS_SUBMIT = array(
    1 => 'הוספת קישור',
    2 => 'קישור',
    3 => 'קטגוריה',
    4 => 'אחר',
    5 => 'אם אחר, אנא ציינו איזה',
    6 => 'שגיאה: חסרה קטגוריה',
    7 => 'בעת בחירת "אחר" אנא ספקו גם שם קטגוריה',
    8 => 'כותרת',
    9 => 'כתובת',
    10 => 'קטגוריה',
    11 => 'הגשות קישורים'
);

###############################################################################
# Messages for COM_showMessage the submission form

$PLG_links_MESSAGE1 = "תודה לכם על שהגשתם קישור ל-{$_CONF['site_name']}.  הוא הוגש לצוות שלנו בשביל אישור.  אם יאושר, הקישור שלכם יופיע בחלק <a href={$_CONF['site_url']}/links/index.php>הקישורים</a>.";
$PLG_links_MESSAGE2 = 'הקישור שלכם נשמר בהצלחה.';
$PLG_links_MESSAGE3 = 'הקישור שלכם נמחק בהצלחה.';
$PLG_links_MESSAGE4 = "תודה לכם שהגשתם קישור ל-{$_CONF['site_name']}.  הנכם יכולים לראות אותו עכשיו בחלק <a href={$_CONF['site_url']}/links/index.php>הקישורים</a> .";
$PLG_links_MESSAGE5 = 'אין בידיכם מספיק זכויות גישה כדי לצפות בקטגוריה זו.';
$PLG_links_MESSAGE6 = 'אין לכם זכויות מספיקות כדי לערוך קטגוריה זו.';
$PLG_links_MESSAGE7 = 'אנא הכניסו את שם ותיאור הקטגוריה.';
$PLG_links_MESSAGE10 = 'הקטגוריה שלכם נשמרה בהצלחה.';
$PLG_links_MESSAGE11 = 'לא ניתן לקבוע קוד זיהוי של קטגוריה כ-"site" או כ-"user" - מילים אלו שמורות לשימוש פנימי.';
$PLG_links_MESSAGE12 = 'הנכם מנסים לקבוע קטגוריה עליונה כתת-קטגוריה של תת-קטגוריה של עצמה. זה ייצור קטגוריה יתומה, לכן אנא הזיזו את תת-הקטגוריה או תת הקטגוריות לשלב גבוה יותר.';
$PLG_links_MESSAGE13 = 'הקטגוריה נמחקה בהצלחה.';
$PLG_links_MESSAGE14 = 'הקטגוריה מכילה קישורים ו/או קטגוריות. אנא מיחקו אותן קודם.';
$PLG_links_MESSAGE15 = 'אין לכם מספיק הרשאות למחוק קטגוריה זו.';
$PLG_links_MESSAGE16 = 'אין כזו קטגוריה.';
$PLG_links_MESSAGE17 = 'קוד זיהוי קטגוריה זה כבר נמצא בשימוש.';

// Messages for the plugin upgrade
$PLG_links_MESSAGE3001 = 'אין תמיכה בשדרוג ה-plugin.';
$PLG_links_MESSAGE3002 = $LANG32[9];

###############################################################################
# admin/plugins/links/index.php

$LANG_LINKS_ADMIN = array(
    1 => 'עריכת קישורים',
    2 => 'קוד זיהוי קישור',
    3 => 'כותרת הקישור',
    4 => 'כתובת הקישור',
    5 => 'קטגוריה',
    6 => '(כולל <span dir=ltr>http://</span>)',
    7 => 'אחר',
    8 => 'לחיצות על הקישור',
    9 => 'תיאור הקישור',
    10 => 'הנכם צריכים לציין כותרת לקישור, כתובת ותיאור.',
    11 => 'ניהול קישורים',
    12 => 'To modify or delete a link, click on that link\'s edit icon below.  To create a new link or a new category, click on "New link" or "New category" above. To edit multiple categories, click on "List categories" above.',
    14 => 'קטגורית קישור',
    16 => 'הגישה לא אושרה',
    17 => "הנכם מנסים לגשת לקישור שאין לכם גישה אליו.  נסיון זה נרשם ביומן. אנא <a href=\"{$_CONF['site_admin_url']}/plugins/links/index.php\">חיזרו למסך ניהול הקישורים</a>.",
    20 => 'אם אחר, ציינו איזה',
    21 => 'שמירה',
    22 => 'ביטול',
    23 => 'מחיקה',
    24 => 'הקישור לא נמצא',
    25 => 'הקישור שבחרתם לעריכה לא נמצא.',
    26 => 'וידוא קישורים',
    27 => 'מצב HTTP',
    28 => 'עריכת קטגוריה',
    29 => 'הכניסו או עירכו את הפריטים שלהלן.',
    30 => 'קטגוריה',
    31 => 'תיאור',
    32 => 'קוד זיהוי קטגוריה',
    33 => 'נושא',
    34 => 'קטגוריה עליונה',
    35 => 'בכולם',
    40 => 'עירכו קטגוריה זו',
    41 => 'צרו תת-קטגוריה',
    42 => 'מיחקו קטגוריה זו',
    43 => 'קטגוריות האתר',
    44 => 'הוסיפו&nbsp;תת-קטגוריה',
    46 => 'המשתמש %s ניסה למחוק קטגוריה שאין לו/לה גישה אליה',
    50 => 'רשימת קטגוריות',
    51 => 'קישור חדש',
    52 => 'קטגוריה חדשה',
    53 => 'רשימת קישורים',
    54 => 'ניהול קטגוריות',
    55 => 'עירכו את הקטגוריות שלהלן. שימו לב שאינכם יכולים למחוק קטגוריה שמכילה קטגוריות או קישורים אחרים - עליכם למחוק אותם תחילה, או להזיזם לקטגוריה אחרת .',
    56 => 'עריכת קטגוריות',
    57 => 'עדיין לא וודא',
    58 => 'ודאו עכשיו',
    59 => '<p>כדי לוודא את כל הקישורים המוצגים, אנא ליחצו על הקישור "ודאו עכשיו" שלהלן. אנא שימו לב שזה עלול לקחת קצת זמן בהתאם לכמות הקישורים המוצגים.</p>',
    60 => 'המשתמש %s ניסה לערוך ללא רשות את הקטגוריה %s.',
    61 => 'קישורים בקטגוריה'
);


$LANG_LINKS_STATUS = array(
    100 => 'המשך',
    101 => 'החלפת פרוטוקולית',
    200 => 'בצעו',
    201 => 'נוצר',
    202 => 'אושר',
    203 => 'מידע לא מהימן',
    204 => 'אין תוכן',
    205 => 'איפוס התוכן',
    206 => 'תוכן חלקי',
    300 => 'בחירה רבת אפשרויות',
    301 => 'הוזז באופן סופי',
    302 => 'נמצא',
    303 => 'ראו את הקטגוריה אחרים',
    304 => 'לא שונה',
    305 => 'שימוש בפרוקסי',
    307 => 'הפנייה זמנית',
    400 => 'בקשה לא תקינה',
    401 => 'אין הרשאה',
    402 => 'נדרש תשלום',
    403 => 'אין גישה',
    404 => 'לא נמצא',
    405 => 'השיטה אינה מורשית',
    406 => 'לא התקבל',
    407 => 'נדרש אימות פרוקסי',
    408 => 'פקע הזמן שהוקצב לבקשה',
    409 => 'קונפליקט',
    410 => 'נעלם',
    411 => 'דרוש האורך',
    412 => 'כשל Precondition',
    413 => 'הישוב המבוקשת גדולה מדי',
    414 => 'ה-URI המבוקש ארוך מדי',
    415 => 'סוג מדיה לא נתמך',
    416 => 'טווח בקשה לא מספיק',
    417 => 'כשל בציפייה',
    500 => 'שגיאת שרת פנימית',
    501 => 'לא יושם',
    502 => 'Gateway לא תקין',
    503 => 'השירות לא ניתן',
    504 => 'פקע הזמן שהוקצב ל-Gateway',
    505 => 'גרסת ה-HTTP אינה נתמכת',
    999 => 'פקע הזמן שהוקצב לחיבור'
);

// Localization of the Admin Configuration UI
$LANG_configsections['links'] = array(
    'label' => 'קישורים',
    'title' => 'כיוון קישורים'
);

$LANG_confignames['links'] = array(
    'linksloginrequired' => 'נדרשת הזדהות בשביל צפייה בקישורים?',
    'linksubmission' => 'איפשור תור הגשות?',
    'newlinksinterval' => 'מרווח זמן של קישור חדש',
    'hidenewlinks' => 'החבאת קישורים חדשים?',
    'hidelinksmenu' => 'החבאת ההפנייה לקישורים מהתפריט?',
    'linkcols' => 'כמות הקטגוריות בכל שורה',
    'linksperpage' => 'כמות הקישורים בכל עמוד',
    'show_top10' => 'הצגת 10 הקישורים הפופולריים ביותר?',
    'notification' => 'התראה בהודעת אימייל?',
    'delete_links' => 'מחיקת הקישורים עם שולחיהם?',
    'aftersave' => 'אחרי שמירת הקישור',
    'show_category_descriptions' => 'הצגת תיאור הקטגוריה?',
    'new_window' => 'האם לפתוח קישורים חיצוניים בחלון חדש?',
    'root' => 'קוד הזיהוי של הקטגוריה הראשית',
    'default_permissions' => 'הרשאות ברירת המחדל של קישורים',
    'category_permissions' => 'הרשאות ברירת המחדל של קטגוריות',
    'autotag_permissions_link' => '[link: ] Permissions'
);

$LANG_configsubgroups['links'] = array(
    'sg_main' => 'הגדרות ראשיות'
);

$LANG_tab['links'] = array(
    'tab_public' => 'Public Links List Settings',
    'tab_admin' => 'Links Admin Settings',
    'tab_permissions' => 'Link Permissions',
    'tab_cpermissions' => 'Category Permissions',
    'tab_autotag_permissions' => 'Autotag Usage Permissions'
);

$LANG_fs['links'] = array(
    'fs_public' => 'הגדרות רשימת קישורים פומביים',
    'fs_admin' => 'הגדרות ניהול קישורים',
    'fs_permissions' => 'הרשאות קישורים',
    'fs_cpermissions' => 'הרשאות קטגוריות',
    'fs_autotag_permissions' => 'Autotag Usage Permissions'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['links'] = array(
    0 => array('כן' => 1, 'לא' => 0),
    1 => array('כן' => true, 'לא' => false),
    9 => array('הפנייה לעמוד המקושר' => 'item', 'הצגת רשימת הניהול' => 'list', 'הצגת הרשימה הציבורית' => 'plugin', 'הצגת דף הבית' => 'home', 'הצגת דף הניהול' => 'admin'),
    12 => array('אין גישה' => 0, 'קריאה בלבד' => 2, 'קריאה וכתיבה' => 3),
    13 => array('No access' => 0, 'Use' => 2)
);

?>
