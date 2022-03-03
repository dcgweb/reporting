## Laravel Reporting App

Let me start by saying that I have never used Laravel before so take all the code in this repo with a big grain of salt.

Live Demo is at https://reporting.dcg-web.com will provide the u/p pair separately

This simple app will make use of rdpymnts API to display tables and detailed data of each transaction as well as customers data.

By default it only connects to the sandbox API which can be changed of course.

No unit tests were done simply because of the time constraints and my lack of knowledge on the subject which would make it take much more time.

The app logs in and stores the api_token in the sqlite db of a user profile and uses it to regenerate a new token if needed (every 10 minutes or so) since it expires.

Transactions list query is an AJAX query as requested and simply populates a datatables table.

Client and transaction data are being dumped on the screen as is.

Reporting endpoint is giving out an error which usually indicates a misconfigured mongodb configuration.

