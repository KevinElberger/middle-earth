## Middle Earth Web Application

Middle Earth is a web application that allows users to create, read, and update articles that can be read by other users. Middle Earth provides an enjoyable way for people to express themselves via their writing and tries to streamline the process of posting articles on the web.

Users can also create and update their own personal profiles that can be viewed by other users. This is helpful for people who want more insight about the author of the articles that they have read. Users can also implement their own personal avatars via Gravatar if they so choose.

## API
Middle Earth also comes equipped with some API functionality that is paired with the associated Java stand-alone application of the same name. Some of the API functionality is documented below:

## Users
By sending an HTTP POST request to "/api/v1/url" with the name of a Middle Earth user, a JSON response will be issued containing relevant information about the user. The specific information will be the user's information, such as their name, ID, the time of their creation, and their email.

## Articles
Sending an HTTP GET request to "/api/v1/url/article", a JSON response of the most recent article posted to the site will be returned.

Also, sending an HTTP POST to "/api/v1/url/article" will allow users to create an article by passing the relevant information needed to create an article. The parameters needed are: title, body, and the published_at date.

## Future Updates
Some additional functionality for the API will be added in the future. Increased user-related functionality, such as allowing users to update or even create their profiles will be implemented in the next few updates.