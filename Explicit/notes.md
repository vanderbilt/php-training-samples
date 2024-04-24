# Explicit vs Implicit
Assume that on a certain date we added a new feature requiring users to agree to terms when they log in. How do we verify they agreed to the terms?
  * If login > date terms added to the UI
  * Boolean field for agreeing to terms
  * Date field for agreeing to terms
  * Another table to track date person agreed to terms, and which terms they agreed to

# Joined vs individual values
Assume the system stores a name.  How do you get the first and last names? 

# Returning Null 
When expecting a string or int value, the code returns null. Calling methods will 
then have to deal with the empty value, because there is no promise of a real 
value. 

# Design by Contract
* Preconditions - The client guarantees that certain conditions are met before calling the method
* Postcondition - The method guarantees conditions before returning to client
* Invariant - Things that are guaranteed not to change

