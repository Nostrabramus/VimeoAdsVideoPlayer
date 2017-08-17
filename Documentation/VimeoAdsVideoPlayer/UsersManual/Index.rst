.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Users manual
------------

The  ***Vimeo Ads Video Player*** is very easy to use.

In order to use it:

- go to ***Web → Page***

- chose the page where you want to add the player

- Chose the ***column*** of the page you want to put the player and
  insert a content element. The ***Vimeo Ads Video Player*** is shown in
  the ***plugins*** group.

|img-7| .

Now go in the tab ***Plugin*** of the page content to configure the
plugin as follows:

- in the textarea ***Vimeo Video ID*** enter the ids of the videos (one
  per line);

- use the select ***Autoplay*** to chose if the video automatically
  starts on load, the default option of the flexform is to take the
  value defined at typoscript;

- use the select R ***andom Start*** to chose ifthe the video list
  starts randomly from one of the video or not, the default option of
  the flexform is to take the value defined at typoscript(this setting
  has no effect if you have only one video id in the ***Vimeo Video
  ID*** field);

- use the select ***Loop*** to chose if the only video or the first
  video of the list plays again when it reaches the end, the default
  option of the flexform is to take the value defined at typoscript;

- use the select ***Mute*** to chose if the video starts with audio or
  not, the default option of the flexform is to take the value defined
  at typoscript. If you set 1 (no audio) the volume of the video is
  automatically activated when the mouse hovers on the video players;

- in the input field ***Video width (px)*** you can enter the width of
  the player in pixels,if you do not enter anything it will take the
  value defined at typoscript;

- in the input field ***Video height (px)*** you can enter the height of
  the player in pixels,if you do not enter anything it will take the
  value defined at typoscript;

After configuring the plugin press save document and you're done.

|img-6| .


