# MVC-Pattern-Basics

## Investigation

- What is an **architecture pattern**?
  An architectural pattern is a general, reusable solution to a commonly occurring problem in software architecture within a given context. Architectural patterns are similar to software design pattern but have a broader scope.

- What is the **MVC pattern**?
  MVC pattern divides an interactive application in to 3 parts as:
    1. **model** — contains the core functionality and data
    2. **view** — displays the information to the user (more than one view may be defined)
    3. **controller** — handles the input from the user
  This is done to separate internal representations of information from the ways information is presented to, and accepted from, the user. It decouples components and allows efficient code reuse.
  - Usage:
    - Architecture for World Wide Web applications in major programming languages
    - Web frameworks such as Django and Rails.

- **Draw a scheme** where you **understand** that the **MVC pattern** is clearly
  ![Alt text](assets/img/mvc_scheme.png?raw=true "MVC scheme")

- Explain in **which cases you would use this pattern**
  MVC serves well when you have an application that needs separation of the data(model), the data crunching(controller), and the presentation of the data(view). This also serves well in an application where the data source and/or data presentation can change at any time

- Describe **step by step** what happens in this **pattern** from when you **create a Request** until a **Response is returned** (you can give more than one example if you consider it necessary).
  - **Model:**
      This level is very important as it represents the data to the user. This level defines where the application’s data objects are stored. The model doesn’t know anything about views and controllers. So, whenever there are changes done in the model it will automatically notify observers that the changes are made. The model may be a single object or a structure of objects.

  - **Views:**
    A view is a visual representation of the MVC model. This level creates an interface to show the actual output to the user. However, a view will not display anything itself. It is the controller or model that tells view of what to display to the user. It also handles requests from the user and informs the controller. A view is connected to its model and gets the data necessary for the presentation by asking certain questions. Sometimes, it also updates the model by sending appropriate messages. All these questions and messages are sent back to the model in such an easy terminology that can easily understand the information sent by a model or a controller.

  - **Controller:**
    The controller is a level that acts as the brain of the entire MVC system. A controller also acts as a link between a user and the system. It provides the user with the input by providing appropriate views to present it appropriately on the screen. The controller understands user output, converts it into the appropriate messages and passes the same to views.

- What **advantages** do you think this **pattern** has to **use**?
  - Faster development process: MVC supports rapid and parallel development.
  - Ability to provide multiple views.
  - Support for asynchronous technique.
  - The modification does not affect the entire model.
  - MVC model returns the data without formatting.
  - SEO friendly Development platform.
