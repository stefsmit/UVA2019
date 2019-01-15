# Technical Design


# Routes
- Homepage
- Search Results page
- Profile page
- Car page
- Favorites page
- Register page


**Homepage**
<br>
Users have to be able to search for cars, no matter if they are logged in or not. When doing so, they will be redirected to the Search Result Page, where results will be shown for the search query. Now they can filter the results by filling in the filter parameters they would like to apply. Furthermore the homapge will display the highest rated cars by our members, suggests cars you may like and show recent reviews made by users.

**Search Results page**
<br>
After a search query has been submitted, the user will be redirected to this page. On this page users can apply filters to their search query. After the filters have been submitted, a filtered result will show up of the cars with the corresponding details. Everyone must be able to access this page, users are not required to be logged in. 

**Profile Page**
<br>
On the profile page users will see their own name, liked cars and reviews they have submitted. This page must be accesable to everyone, users are not required to be logged in to be able to see other people's profile.

**Car Page**
<br>
After you have filtered you search query on the Search Results page, users can click on cars they want to get more details about and will be redirected to a unique page per car. Every page will show one car, with it's specifications.

**Favorites Page**
<br>
On this page logged in users can see the cars they have added to their favorite car selection.

# Functions
- Search
- Login
- Register 
- Review
- Favorite

# Views
-

# Models/Helpers
- search()
- placereview()
- deletereview()
- favorite()
- unfavorite()
- calcmean()
- login()
- register()
- logout()
