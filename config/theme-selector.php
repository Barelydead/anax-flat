<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorfull.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typo.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "texture"       => [
            "title"      => "Backgroud texture with transparent elements",
            "class"      => "texture",
            "stylesheets" => [
                "css/texture.min.css"
            ]
        ],

        "background"       => [
            "title"      => "Backgroud image with full width and picture elements.",
            "class"      => "background",
            "stylesheets" => [
                "css/background.min.css"
            ]
        ],


        "gradients"       => [
            "title"      => "Gradients lines and full width.",
            "class"      => "texture",
            "stylesheets" => [
                "css/gradients.min.css"
            ]
        ],

        "separator3" => "------------------------------------------------",

        "depth"       => [
            "title"      => "Using shadows and other stuff to create depth",
            "class"      => "perspective",
            "stylesheets" => [
                "css/depth.min.css"
            ]
        ],

        "movement"       => [
            "title"      => "animations and hover over effekts to create movment",
            "class"      => "balace",
            "stylesheets" => [
                "css/movement.min.css"
            ]
        ],

        "repetition"       => [
            "title"      => "reseing the same graphic elements on lots of places.",
            "class"      => "balace",
            "stylesheets" => [
                "css/repetition.min.css"
            ]
        ],
    ]
];
