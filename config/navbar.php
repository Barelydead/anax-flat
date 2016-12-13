<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("vertical grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("typography Grid")
            ],

            "teman" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("teman"),
                "title" => t("sidans teman")
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("analys av hemsidor"),
                "mark-if-parent" => true,
            ],

            "images" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("figure"),
                "mark-if-parent" => true,
            ],

            "design-principle" => [
                "text"  => t("Principles"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Design"),
                "mark-if-parent" => true,
            ],

            "design-elements" => [
                "text"  => t("Elements"),
                "url"   => $this->di->get("url")->create("design-elements"),
                "title" => t("Design"),
                "mark-if-parent" => true,
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Min bildblogg"),
                "mark-if-parent" => true,
            ],


        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("vertical grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("typography Grid")
            ],

            "teman" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("teman"),
                "title" => t("sidans teman")
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("analys av hemsidor"),
                "mark-if-parent" => true,
            ],

            "images" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("figure"),
                "mark-if-parent" => true,
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Min bildblogg"),
                "mark-if-parent" => true,
            ],

            "theme-selector" => [
                "text"  => t("theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("theme-selector")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
