# curl-manager-php
Example of a PHP class that can be used to manage and handle curl requests

To use this class, you would create a new instance of the CurlManager class and pass in the URL that you want to make a request to.

Then, you can use the setOption() method to set any curl options that you want to use for the request.

Finally, you can use the execute() method to send the request and get the response.

When you are finished with the request, the __destruct() method will automatically close the curl handle.
