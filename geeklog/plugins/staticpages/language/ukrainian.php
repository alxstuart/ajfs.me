<?php

###############################################################################
# ukrainian.php
# This is the ukrainian language page for the Geeklog Static Page Plug-in!
#
# Copyright (C) 2006 Vitaliy Biliyenko
# v.lokki@gmail.com
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
    'newpage' => '���� �������',
    'adminhome' => '��������������',
    'staticpages' => '�������� �������',
    'staticpageeditor' => '�������� ��������� �������',
    'writtenby' => '�����',
    'date' => '�������� ��������',
    'title' => '���������',
    'page_title' => 'Page Title',
    'content' => '����',
    'hits' => 'ճ��',
    'staticpagelist' => '������ ��������� �������',
    'url' => 'URL',
    'edit' => '����������',
    'lastupdated' => '�������� ��������',
    'pageformat' => '������ �������',
    'leftrightblocks' => '˳��� �� ������ �����',
    'blankpage' => '������� �������',
    'noblocks' => '��� �����',
    'leftblocks' => '˳� �����',
    'addtomenu' => '������ �� ����',
    'label' => '̳���',
    'nopages' => '� ������ �� ���� ��������� �������',
    'save' => '��������',
    'preview' => '��������',
    'delete' => '��������',
    'cancel' => '�������',
    'access_denied' => '������ ����������',
    'access_denied_msg' => '�� ���������� ���������� �������� ������ �� ������ � ������ �������������� ��������� �������.  ���� �����, ������, �� �� ������ ������������ ������� �� ���� ������� ������� �� ���������',
    'all_html_allowed' => '���� HTML ���������',
    'results' => '���������� ����� ��������� �������',
    'author' => '�����',
    'no_title_or_content' => '��� ��������� ��������� ��������� ���� <b>���������</b> �� <b>����</b>.',
    'no_such_page_anon' => '���� �����, ������ ..',
    'no_page_access_msg' => "�������, �� ��������� ����, �� �� �� ������, ��� �� � ������ {$_CONF['site_name']}. ���� �����, <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> ������������� </a>�� {$_CONF['site_name']} ��� ��������� ������� �������",
    'php_msg' => 'PHP: ',
    'php_warn' => '������������: PHP ��� ���� ������� ���� �������� ���� �� �������� �� �����. ������ ��������!!',
    'exit_msg' => '��� ������: ',
    'exit_info' => '������������� ������������ ��� �����.  ������� ���������� ��� ���������� �������� ������� �� ����������.',
    'deny_msg' => '������ �� ���� ������� ����������. ������� ��� ���� ���������/��������, ��� � ��� ���� ���������� �������.',
    'stats_headline' => '10 ��������������� ��������� �������',
    'stats_page_title' => '��������� �������',
    'stats_hits' => 'ճ��',
    'stats_no_hits' => '�� ����� ���� ���� ��������� ������� ��� ����� �� �� ��������.',
    'id' => 'ID',
    'duplicate_id' => '������� ���� ID ��� ���� ������� ��� ���������������. ���� �����, ������� ����� ID.',
    'instructions' => '��� ������ �� �������� �������� �������, ��������� �� �� ������ ����������� �����. ��� ����������� �������, ��������� �� �� ���������. ��� �������� ���� �������� �������, ������ �������� ���� ����. ��������� ������ ��ﳿ, ��� ��������� ������� �������.',
    'centerblock' => '����������� ����: ',
    'centerblock_msg' => '���� �� �������, �� �������� ������� ���� ���������� �� ����������� ���� �� �������� �������.',
    'topic' => '����: ',
    'position' => '���������: ',
    'all_topics' => '��',
    'no_topic' => '���� ������� �������',
    'position_top' => '���� �������',
    'position_feat' => 'ϳ��� �������� �����',
    'position_bottom' => '����� �������',
    'position_entire' => '�� ��� �������',
    'head_centerblock' => '����������� ����',
    'centerblock_no' => 'ͳ',
    'centerblock_top' => '����',
    'centerblock_feat' => '����. ������',
    'centerblock_bottom' => '���',
    'centerblock_entire' => '��� �������',
    'inblock_msg' => '� �����: ',
    'inblock_info' => '�������� �������� ������� � ����.',
    'title_edit' => '���������� �������',
    'title_copy' => '�������� �������',
    'title_display' => '����������� �������',
    'select_php_none' => '�� ���������� PHP',
    'select_php_return' => '���������� PHP (return)',
    'select_php_free' => '���������� PHP',
    'php_not_activated' => "������������ PHP � ��������� �������� �� ����������. ���� �����, ��������� � <a href=\"{$_CONF['site_url']}/docs/english/staticpages.html#php\">������������</a> ���� �������.",
    'printable_format' => '������ ��� �����',
    'copy' => '��������',
    'limit_results' => '�������� ����������',
    'search' => '�����',
    'submit' => '³������',
    'no_new_pages' => 'No new pages',
    'pages' => 'Pages',
    'comments' => 'Comments',
    'template' => 'Template',
    'use_template' => 'Use Template',
    'template_msg' => 'When checked, this Static Page will be marked as a template.',
    'none' => 'None',
    'use_template_msg' => 'If this Static Page is not a template, you can assign it to use a template. If a selection is made then remember that the content of this page must follow the proper XML format.',
    'draft' => 'Draft',
    'draft_yes' => 'Yes',
    'draft_no' => 'No',
    'autotag_desc_staticpage' => '[staticpage: id alternate title] - Displays a link to a static page using the static page title as the title. An alternate title may be specified but is not required.',
    'autotag_desc_staticpage_content' => '[staticpage_content: id alternate title] - Displays the contents of a staticpage.'
);

$PLG_staticpages_MESSAGE15 = 'Your comment has been submitted for review and will be published when approved by a moderator.';
$PLG_staticpages_MESSAGE19 = 'Your page has been successfully saved.';
$PLG_staticpages_MESSAGE20 = 'Your page has been successfully deleted.';
$PLG_staticpages_MESSAGE21 = 'This page does not exist yet. To create the page, please fill in the form below. If you are here by mistake, click the Cancel button.';

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Plugin upgrade not supported.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['staticpages'] = array(
    'label' => 'Static Pages',
    'title' => 'Static Pages Configuration'
);

$LANG_confignames['staticpages'] = array(
    'allow_php' => 'Allow PHP?',
    'sort_by' => 'Sort Centerblocks by',
    'sort_menu_by' => 'Sort Menu Entries by',
    'sort_list_by' => 'Sort Admin List by',
    'delete_pages' => 'Delete Pages with Owner?',
    'in_block' => 'Wrap Pages in Block?',
    'show_hits' => 'Show Hits?',
    'show_date' => 'Show Date?',
    'filter_html' => 'Filter HTML?',
    'censor' => 'Censor Content?',
    'default_permissions' => 'Page Default Permissions',
    'autotag_permissions_staticpage' => '[staticpage: ] Permissions',
    'autotag_permissions_staticpage_content' => '[staticpage_content: ] Permissions',
    'aftersave' => 'After Saving Page',
    'atom_max_items' => 'Max. Pages in Webservices Feed',
    'meta_tags' => 'Enable Meta Tags',
    'comment_code' => 'Comment Default',
    'draft_flag' => 'Draft Flag Default',
    'newstaticpagesinterval' => 'New Static Page Interval',
    'hidenewstaticpages' => 'Hide New Static Pages',
    'title_trim_length' => 'Title Trim Length',
    'includecenterblocks' => 'Include Center Block Static Pages',
    'includephp' => 'Include Static Pages with PHP',
    'includesearch' => 'Enable Static Pages in Search',
    'includesearchcenterblocks' => 'Include Center Block Static Pages',
    'includesearchphp' => 'Include Static Pages with PHP'
);

$LANG_configsubgroups['staticpages'] = array(
    'sg_main' => 'Main Settings'
);

$LANG_tab['staticpages'] = array(
    'tab_main' => 'Static Pages Main Settings',
    'tab_whatsnew' => 'What\'s New Block',
    'tab_search' => 'Search Results',
    'tab_permissions' => 'Default Permissions',
    'tab_autotag_permissions' => 'Autotag Usage Permissions'
);

$LANG_fs['staticpages'] = array(
    'fs_main' => 'Static Pages Main Settings',
    'fs_whatsnew' => 'What\'s New Block',
    'fs_search' => 'Search Results',
    'fs_permissions' => 'Default Permissions',
    'fs_autotag_permissions' => 'Autotag Usage Permissions'
);

// Note: entries 0, 1, 9, 12, 17 are the same as in $LANG_configselects['Core']
$LANG_configselects['staticpages'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false),
    2 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title'),
    3 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Label' => 'label'),
    4 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Author' => 'author'),
    5 => array('Hide' => 'hide', 'Show - Use Modified Date' => 'modified', 'Show - Use Created Date' => 'created'),
    9 => array('Forward to page' => 'item', 'Display List' => 'list', 'Display Home' => 'home', 'Display Admin' => 'admin'),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    17 => array('Comments Enabled' => 0, 'Comments Disabled' => -1)
);

?>
