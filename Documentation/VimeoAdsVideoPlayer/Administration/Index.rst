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


Administration
--------------

After installing the extension, you have to add the static template
“Vimeo (aip\_vimeo)” to your Template and be sure to check "Include
Static Templates Templates After Basis:" if necessary.

|img-8| .

You can configure some operating parameters of the plugin changing the
typoscript AIPVIMEO constants via the Constant Editor. In particular
you can:

- Use  ***Path to template (FE)*** property to define a different folder
  where to place your fluid template. The fluid template must be put
  inside in a subfolder called video;

- Define a different stylesheet using ***Path to Css*** property

- Insert the width of the player video using ***Video width (px)***
  property

- Insert the height of the player video using ***Video heigth (px)***
  property

- Set the autoplay behavior using ***Autoplay*** property

- Set the randomized start of the list of the video using ***Random***
  property (it has no effect if you put only one video id in the player
  video flexform)

- Set the loop behavior using ***Loop*** property

- Set the volume to 0 on video start playing using ***Mute*** property
  (the volume is automatically activated when the mouse hovers on the
  video player)

|img-9| .


