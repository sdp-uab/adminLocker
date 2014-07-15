adminLocker
===========

PKP-OJS plugin to lock the specified pages/forms for every user except the pivileged ones. 


Configuration
=============

The pages that need to be locked and the users the privileged users are defined
in the plugin config file (/plugins/generic/adminlocker/config.inc.php).

You need to modifiy this file to fit your needs.

The configuration file includes two sections: "allowedUsers" and "disabledPages"

Add your privileged usernames to the "allowedUsers" array as follows:

    user[]='admin'
    user[]='root'

To lock pages/forms you need it's "pageTitle". 
Set the variable "pageTitle" to TRUE to show the "pageTitle" of each page.

Add your locked pages to "disabedPages"

There are 4 different types of locks:
    * links: Make links of the content area useless.
    * forms: Disable input, select, button and textarea.
    * info: Replace page with a lock info page.
    * all: Locks the form at "links" and "forms" level.


Advice
======

This module is designed to avoid unexpert users reach harmful areas.
This is not a security module so it do NOT claim to be secure. 

In this sense, you need to take in consideration that the module won't 
be able to lock:

    * If the page lacks of $pageTitle.
    * If the action is against an URL (no page is generated).
    * "links" and "forms" locking won't work with pages created in the 
      client side with JS (pe: AJAX).


Improvements/ideas/todos
========================

    * Extend the list of the "default" locked pages.
    * Diferent config for each journal? Move config.inc.php to webdata?
    * Move config to a webUI?
    * Use OJS templates?
    * Use OJS notification system?
    * Use an HTML parser as DOMDocument or simpleXML?
    * Redesign it all? Use FBV framework instead of filtering generated code?
    * Instead of "pageTitle" improve the locking identification based on... what? urls?
