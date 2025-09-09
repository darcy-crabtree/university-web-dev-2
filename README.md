# university-web-dev-2

All code was used in conjunction with provided Laravel files that are not provided. Only modified files were included.

Completed 15/01/2025

# Overview
The contents of this README file contain; Authentication and Authorisation, Tailwind, Responsive Design and Additional Databases. Each section also contains an analysis piece, stating what could be improved within the section.

# Authentication and Authorisation

This addition restricts user access before logging in, allowing for a guest mode and then once logged in allowing access depending on the user's role ID. Roles include regular and admin users.

## Sign In Page
The sign in page restricts access to the rest of the website until the user has logged in. Giving the user an option to sign in.
For example

        @guest
    	<p class="pt-4">
        	You need to be logged in to view the content of this website. @endguest
    	</p>

These restrictions have been placed upon all navigable pages to prevent unauthorised used, dictated by the @auth or @guest gate.

## Access Roles
Gates were used to allow for regular users and admin users. Admin users differ from regular users as they have the ability to modify and delete database table data. These roles are predetermined and assigned within the user database seeder.

## Authentication and Authorisation Analysis
The current limitations to this authorisation is that there are only two types of roles and could be improved upon by adding new intermediate roles that have more access than the standard user but less authorisation than the admin role. This would be needed if this feature was to be implemented in a site such as "Reddit" to allow for moderation of posts. Additionally although not currently needed, a sign up/register page would be a bonus.

# Tailwind
The switch from a standard style CSS file to Tailwind was made to make use of the customisable features such as custom colours and screen sizes that it provides. Overall making the website look more aesthetically pleasing through the use of rounded buttons and an unlimited colour palette.

## Custom colours
Custom colours were implemented into the tailwind config to be used for background colours.
These particular colours were used to match the same colour theme used in the style CSS, through dictating custom colours linked to names with hexadecimal values.
        
        colors: {
            'dark-grey': '#111111',
            'grey': '#333333',
            'light-grey': '#818181',
            'white': '#ffffff',
            'light-blue': '#DCF0F3',
	    'blue-link': '#2563eb',  
        },

## Custom screen sizes
Custom screen sizes were implemented into the tailwind configuration to be used for the responsive design.

        screens: {
            'phone': '0px',
            'tablet': '640px',
            'laptop': '1024px',
            'desktop': '1280px'
        },
        
## Styled Navigation Bar
This includes using a dark themed navigation bar with white writing. When a button is hovered over the background of the button changes from a dark grey to a medium grey, making it visible which button the user is currently hovering over.

	<!--Home Nav-->
        <li id="navList" class="hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3" href="/medications">
            Home
          </a>
        </li>

## Tailwind Analysis
Overall Tailwind is used to make a website more aesthetically pleasing by allowing a wider range of customisation that standard CSS does not allow for. Although the intention of the website is to be simple, it could be improved upon by making use of the ability to import images onto the website with ease through tailwind to add a variation of colour to the current standard colour scheme.

# Responsive Design
## Varying Screen sizes
Varying screen sizes allows text to be changed to fit the needs of the user's device; making the text smaller for devices such as phones and making the text larger for devices such as laptops, making it easier to view and read the website.

This has been applied throughout the entire website, for example the Header changes to various sizes depending on what the screen size is.

	<h1 class="font-bold text-center underline py-2 mb-4
	    phone:text-2xl
	    tablet:text-4xl
	    laptop:text-6xl
	    desktop:text-7xl
	    ">
	        List of medications
	</h1>

## Responsive Nav Bar
The navigation bar changes sizes depending on the size of the screen, once it reaches a mobile size the navigation bar changes from the standard horizontal view to a vertical view, made retractable with a hamburger icon.

	<ul id="navList" class="tablet:flex hidden tablet:block">

## Responsive Design Analysis
The current limit of this addition is that the change in size between device sizes is not smooth and could be improved upon by adding either more intermediate screen sizing or implementing a way so that as the screen size gradually grows, so do the features that are on the page.


# Additional Database
This includes adding an additional effects database on top of the existing medications database linked through the effects_medication pivot table to display additional information about medication and in turn has allowed the effects to form their own pages.

## Additional Pages
Unique effect pages are made available through not only an alphabetically sorted, paginated list accessible from the navigation bar but also each forementioned effect for each medication is clickable, allowing you to reach the effects page from the current medication. Additionally URLs within the effects pages are also clickable.

## Additional Database Analysis
Currently the amount of databases used across the website is relatively low, to improve this more databases could be added to present further information on medications listed as the current information is quite limited and is not representative of the information available in the world nor other medication information sites.
