# Apple SignIn in a website
###### (With apple sign in you can't test it on localhost or anythings like that, you will need a working website)
## First of all you will need a apple developper account

Go to [apple develloper](https://developer.apple.com/programs/) and sign in

Once you have an account, you gonna have to get your account verified by apple 

To get your account verified, you will have to pay 99$ per years

## Once You account is verified

Go to your account and if you are verified you should see this screen

![Apple develloper account verified](https://developer.apple.com/help/account/get-started/sign-in-to-your-developer-account/images/program-resources-light-fr_2x.png "Apple develloper account verified")

Click on Identifiers and you should go on this screen
![Apple develloper Identifiers screen](https://i.goopics.net/dmwetj.png "Apple develloper Identifiers screen")

Click on Register an App ID, then choose App IDs
![Register an App ID](https://i.goopics.net/wn5mbh.png "Register an App ID")

Select the type App
![Select the type App](https://i.goopics.net/2wl4zc.png "Select the type App")

Then Fill your description and your website and use a reverse-domain name style string (exemple if your website is google.com write com.google) 
![Place where fill option](https://i.goopics.net/q51glp.png "Place where fill option")
And choose "SignIn with apple"
![Sign in with apple option](https://i.goopics.net/e9x7pg.png "Sign in with apple option")

After that click continue and register

Once you have created your App ID, you will need to create a Service ID

So click on the +

![+](https://i.goopics.net/79ccx2.png "+")

Choose Service IDs
![Service ID](https://i.goopics.net/qb9ufh.png "Service ID")

Fill again a description and the website (the website have to be different but he can be a fake website)
![Fill Again](https://i.goopics.net/p343e9.png "Fill Again")

Click Continue and Register

After click on the service you just created and check Sign in with apple and configure it

Select your App ID and fill the website url

The domains and subdomains has to be the website url (if  your website is google type "google.com")

And the return url should be the full url (if you want to return to google you type "https://www.google.com")

Like that
![The textarea filled](https://i.goopics.net/aro2ik.png "The textarea filled")

After that, copy your redirection url and the identifier of your services and paste them on the code i give you
```js
AppleID.auth.init({
    clientId : 'clientId', <--- Here the identifier
    scope : 'email name', <--- This say that you gonna get the email and the name
    redirectURI : 'url', <--- Here the url
    state : 'fr', <--- Change it to the state you want
    usePopup : false
});
```

And after all that you can get the response of apple with a `$_POST`
