

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


Reference
^^^^^^^^^


Constants
"""""""""

plugin.tx\_aipvimeo.view

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         layoutRootPath
   
   Data type
         String
   
   Description
         Layouts file path (contains the reference to the javascript libraries)
   
   Default
         EXT:aip\_vimeo/Resources/Private/Layouts/


.. container:: table-row

   Property
         partialRootPath
   
   Data type
         String
   
   Description
         Partials file path (not used)
   
   Default
         EXT:aip\_vimeo/Resources/Private/Partials/


.. container:: table-row

   Property
         templateRootPath
   
   Data type
         String
   
   Description
         Templates file path (contains the video player template inside the
         video folder)
   
   Default
         EXT:aip\_vimeo/Resources/Private/Templates/


.. ###### END~OF~TABLE ######

plugin.tx\_aipvimeo.settings

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         autoplay
   
   Data type
         Boolean
   
   Description
         Play the video automatically on load
   
   Default
         1


.. container:: table-row

   Property
         loop
   
   Data type
         Boolean
   
   Description
         Play the video (or the first video of the list) again when it reaches
         the end
   
   Default
         1


.. container:: table-row

   Property
         mute
   
   Data type
         Boolean
   
   Description
         Enables or disables the audio of the videoSet this to 1if you want
         audio on when the video starts(the volume is automatically activated
         when the mouse hovers on the video player)
   
   Default
         1


.. container:: table-row

   Property
         random
   
   Data type
         Boolean
   
   Description
         Enables or disables the random start of the video list
   
   Default
         1


.. ###### END~OF~TABLE ######

plugin.tx\_aipvimeo.settings.default

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         height
   
   Data type
         Integer
   
   Description
         Height of the video player (in pixels)
   
   Default
         300


.. container:: table-row

   Property
         width
   
   Data type
         Integer
   
   Description
         Width of the video player (in pixels)
   
   Default
         300


.. ###### END~OF~TABLE ######

plugin.tx\_aipvimeo.settings.lib

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         aip\_vimeo
   
   Data type
         String
   
   Description
         Reference to the javascript library
   
   Default
         EXT:aip\_vimeo/Resources/Public/js/aip\_vimeo.js


.. container:: table-row

   Property
         css\_style
   
   Data type
         String
   
   Description
         Reference to the css file
   
   Default
         EXT:aip\_vimeo/Resources/Public/css/style\_vimeo.css


.. container:: table-row

   Property
         froogaloop
   
   Data type
         String
   
   Description
         Reference to the froogaloop2 javascript library (required to use the
         Vimeo API)
   
   Default
         EXT:aip\_vimeo/Resources/Public/js/froogaloop2.min.js


.. ###### END~OF~TABLE ######


Setup
"""""

plugin.tx\_aipvimeo.view

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         layoutRootPath
   
   Data type
         String
   
   Description
         Layouts file path (contains the reference to the javascript libraries)
   
   Default
         $plugin.tx\_aipvimeo.view.layoutRootPath


.. container:: table-row

   Property
         partialRootPath
   
   Data type
         String
   
   Description
         Partials file path (not used)
   
   Default
         $plugin.tx\_aipvimeo.view.partialRootPath


.. container:: table-row

   Property
         templateRootPath
   
   Data type
         String
   
   Description
         Templates file path (contains the video player template inside the
         video folder)
   
   Default
         $plugin.tx\_aipvimeo.view.templateRootPath


.. ###### END~OF~TABLE ######

plugin.tx\_aipvimeo.settings

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         autoplay
   
   Data type
         Boolean
   
   Description
         Play the video automatically on load
   
   Default
         $plugin.tx\_aipvimeo.settings.autoplay


.. container:: table-row

   Property
         badge
   
   Data type
         Boolean
   
   Description
         Enables or disables the badge on the video
   
   Default
         0


.. container:: table-row

   Property
         byline
   
   Data type
         Boolean
   
   Description
         Show the user’s byline on the video
   
   Default
         0


.. container:: table-row

   Property
         color
   
   Data type
         Boolean
   
   Description
         Specify the color of the video controls. Make sure that you don’t
         include the #
   
   Default
         F18E00


.. container:: table-row

   Property
         loop
   
   Data type
         Boolean
   
   Description
         Play the video (or the first video of the list) again when it reaches
         the end
   
   Default
         $plugin.tx\_aipvimeo.settings.loop


.. container:: table-row

   Property
         mute
   
   Data type
         Boolean
   
   Description
         Enables or disables the audio of the videoSet this to 1if you want
         audio on when the video starts(the volume is automatically activated
         when the mouse hovers on the video player)
   
   Default
         $plugin.tx\_aipvimeo.settings.mute


.. container:: table-row

   Property
         portrait
   
   Data type
         Boolean
   
   Description
         Show the user’s portrait on the video as defined by the Vimeo's API
   
   Default
         0


.. container:: table-row

   Property
         random
   
   Data type
         Boolean
   
   Description
         Enables or disables the random startof the video list
   
   Default
         $plugin.tx\_aipvimeo.settings.random


.. container:: table-row

   Property
         title
   
   Data type
         Boolean
   
   Description
         Show the title on the video
   
   Default
         0


.. ###### END~OF~TABLE ######

plugin.tx\_aipvimeo.settings.default

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         height
   
   Data type
         Integer
   
   Description
         Height of the video player (in pixels)
   
   Default
         $plugin.tx\_aipvimeo.settings.default.height


.. container:: table-row

   Property
         width
   
   Data type
         Integer
   
   Description
         Width of the video player (in pixels)
   
   Default
         $plugin.tx\_aipvimeo.settings.default.width


.. ###### END~OF~TABLE ######

plugin.tx\_aipvimeo.settings.lib

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         aip\_vimeo
   
   Data type
         String
   
   Description
         Reference to the javascript library
   
   Default
         $plugin.tx\_aipvimeo.settings.lib.aip\_vimeo


.. container:: table-row

   Property
         css\_style
   
   Data type
         String
   
   Description
         Reference to the css file
   
   Default
         $plugin.tx\_aipvimeo.settings.lib.css\_style


.. container:: table-row

   Property
         froogaloop
   
   Data type
         String
   
   Description
         Reference to the froogaloop2 javascript library (required to use the
         Vimeo API)
   
   Default
         $plugin.tx\_aipvimeo.settings.lib.froogaloop


.. ###### END~OF~TABLE ######


Example
"""""""

Here you can find an example of the plugin configuration that sets the
width and height to 300 pixels; autoplay, loop at random and true;
mute to false:

::

   plugin.tx_aipvimeo {
    settings {
           autoplay = 1
           random = 1
           loop = 1
           mute = 0
         default{
             width = 300
            height = 300
                   }
      }
   }

