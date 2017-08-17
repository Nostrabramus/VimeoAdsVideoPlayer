(function ($) {
    jQuery(document).ready(function ($) {

        var id_vimeo = $("#id_vimeo").val();
        var index_of_array;
        var id_video_now;
        var array_id = splitIdArray(id_vimeo);

        array_id = splitIdArray(id_vimeo);
        if ($('#video_random').val() == 1) {
            id_video_now = array_id[Math.floor(Math.random() * array_id.length)];
        } else {
            id_video_now = array_id[0];
        }
        index_of_array = $.inArray(id_video_now, array_id);

        var options = {
            id: id_video_now,
            width: $('#video_width').val(),
            height: $('#video_height').val()
            //loop: false
        };

        try {
            var player = new Vimeo.Player('player_vimeo', options);
        }catch(e){
            console.log(e);
        };

        // When the player is ready, add finish event
        player.ready().then(function () {
            if ($('#video_mute').val() == 1) {
                player.setVolume(0);
            }
            if ($('#video_play').val() == 1) {
                player.play();
            }
        });

        player.on('ended', function (data) {

            if (index_of_array == (array_id.length - 1)) {
                if ($('#video_loop').val() == 1) {
                    index_of_array = 0;
                    id_video_now = array_id[index_of_array];
                } else {
                    return;
                }
            } else {
                index_of_array = index_of_array + 1;
                id_video_now = array_id[index_of_array];
            }
            player.loadVideo(id_video_now).then(function(id) {
                player.play();
            }).catch(function (error) {
                switch (error.name) {
                    case 'TypeError':
                        // the id was not a number
                        console('typeError ' + error.name);
                        break;

                    case 'PasswordError':
                        // the video is password-protected and the viewer needs to enter the
                        // password first
                        console('passwordError ' + error.name);
                        break;

                    case 'PrivacyError':
                        // the video is password-protected or private
                        console('privacy ' + error.name);
                        break;

                    default:
                        // some other error occurred
                        console('default ' + error.name);
                        break;
                }
            });
        });

        function splitIdArray(id) {
            var arr_id = id.split(';');
            return arr_id;
        }

        $("#player_box").on('error', function (data) {
            console.log("errore: " + data.message);
        });


        $("#player_box").mouseover(function () {
            if ($('#video_mute').val() == 1) {
                player.setVolume(1);
            }
            $('#player_vimeo').addClass("big");
        });

        $("#player_box").mouseout(function () {
            if ($('#video_mute').val() == 1) {
                player.setVolume(0);
            }
            $('#player_vimeo').removeClass("big");
        });

    });
})(jQuery);