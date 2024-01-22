<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2023 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

return [
    "version" => "0.0.1",
    "startingLesson" => "intro",
    "endingLesson" => "ending",
    "lessons" => [
        [
            "id" => "intro",
            "title" => __("Introduction"),
            "points" => 10,
            "showEndingLesson" => true,
            "steps" => [
                [
                    "title" => __("Introduction"),
                    "content" => "file://introduction.md",
                    "tooltipClass" => "large-tooltip",
                ],
                [
                    "element" => "header .btn-group .dropdown",
                    "title" => __("User Menu"),
                    "content" => __("This is a key feature in the interface, located at the top right corner. It serves as a gateway to the user menu, providing access to various user-related functionalities."),
                ],
                [
                    "element" => "header a.lessons-menu-entry.dropdown-item",
                    "title" => __("Lessons Entry"),
                    "content" => __("This menu is a hub for numerous functionalities related to the user. It includes options for account settings, profile information, and more. One of the most important entries in this menu is **My Lessons**. This is where users can access all their lessons, track their progress, and continue learning. It's important to focus on finding the **My Lessons** entry as it is the gateway to the user's learning journey."),
                    "actions" => [
                        "dropdown-show" => [
                            "dropdown" => "header .btn-group .dropdown",
                        ]
                    ],
                ]
            ]
        ],
        [
            "id" => "ending",
            "steps" => [
                [
                    "title" => __("🎉 Congratulations!"),
                    "content" => "file://end-of-lesson.md",
                    "tooltipClass" => "large-tooltip",
                ]
            ]
        ],
        [
            "id" => "menus",
            "title" => __("Menus of GLPI"),
            "category" => "basics",
            "description" => __("Let discover the menus of GLPI"),
            "points" => 10,
            "navigateTo" => "front/central.php",
            "steps" => [
                [
                    "element" => "aside.navbar",
                    "tooltipPosition" => "right",
                    "title" => __("Menu"),
                    "content" => __("This is the global menu of GLPI. It allows you to navigate through the different sections of the application."),
                ],
                [
                    "element" => ".navbar-brand",
                    "tooltipPosition" => "right",
                    "title" => __("Menu"),
                    "content" => __("Vous pouvez accéder à la page d'accueil en cliquant sur le logo GLPI en haut à gauche."),
                ],
                [
                    "element" => "#navbar-menu .nav-item.dropdown:first-child",
                    "tooltipPosition" => "right",
                    "title" => __("Assets"),
                    "content" => __("This menu contains all the **assets** management")
                ],
                [
                    "element" => "#navbar-menu .nav-item.dropdown:nth-child(2)",
                    "tooltipPosition" => "right",
                    "title" => __("Assistance"),
                    "content" => __("This menu contains all things related to **assistance**")
                ]
            ]
        ],
        [
            "id" => "create-ticket",
            "title" => __("Create a ticket"),
            "category" => "assistance",
            "description" => __("Create our first ticket"),
            "points" => 10,
            "navigateTo" => "front/ticket.php",
            "steps" => [
                [
                    "title" => __("Empty ticket page"),
                    "content" => "file://assistance/empty-ticket-page.md"
                ],
                [
                    "element" => "#page .dashboard-card .card-body",
                    "title" => __("Ticket Dashboard"),
                    "content" => "file://assistance/ticket-dashboard.md",
                ],
                [
                    "element" => ".ajax-container.search-display-data",
                    "title" => __("Ticket List"),
                    "content" => "file://assistance/ticket-list.md",
                ],
                [
                    "element" => ".search-form-container",
                    "title" => __("Ticket Search"),
                    "content" => "file://assistance/ticket-search.md",
                ],
                [
                    "element" => "header.navbar .container-fluid ul li:nth-child(1)",
                    "title" => __("Create a ticket"),
                    "content" => "file://assistance/create-ticket.md"
                ]
            ]
        ]
    ]
];
