# Explicit vs Implicit
* Assume that one a certain date we added a new feature requiring users to agree to terms when they login. How do we verify they agreed to the terms?
    * If login > date terms added to the UI
    * Boolean field for agreeing to terms
    * Date field for agreeing to terms
    * Another table to track date person agreed to terms, and which terms they agreed to