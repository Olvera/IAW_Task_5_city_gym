# 2nd ASIR - IAW Task #5

## Implementation of PHP in a subscrition web where to input customer name and select some options in diferents input forms.

### Introduction.

  The selected exercise is a gym subscription, where the costumer choose his level, extra services and specific trainning classes.
  I used basic **_HTML_** code, **_CSS_** for web presentation, a few lines of **_JavaScript_** (for responsive dessign) and, to process and colect input data, **_PHP_**.
  
  The choosen inputs are:
  
        * Text (name and surname)
        * Radio (customer level)
        * Checkbox (extra service/s - one or more)
        * Multiple selection (trainning class/es - one or more)
    
  Each opcion have an associated cost, reflected in the page content (**_city_gym.html_**). Once the choice is done, clicking a button, it sends to another page (**_city_gym.php_**) where it's shown a summary reflecting all the choices, its correspondent cost and the total amount (per month) of all the selections.

## About the code implementation.

### HOME.HTML

A simple page to briefly explain this project.

### CITY_GYM.HTML

The inputs implemented are:
  
  * **_TEXT_** : Two text boxes, one for customer _firstname_ and other for the _surname_.
  
  * **_RADIO_** : Offers four options to select just one, that wich aproach to the customer trainning level, with each associated cost per month:

    * _Beginner_ (25€/month)
    * _Fitness_ (30€/month)
    * _Advanced_ (35€/month)
    * _Pro_ (50€/month)

  * **_CHECKBOX_** : To choose the extra services between the showed, no one, one or more:
  
    * _Shower_ (10€/month)
    * _Towels_ (8€/month)
    * _Locker_ (5€/month)
      
  * **_MULTIPLE SELECTION_** : Four more options of especial trainning classes, also to choose no one, one or more:
  
    * _Spinning_ (10€/month)
    * _Cardio dance_ (20€/month)
    * _Strength workout_ (25€/month)
    * _Competition trainning_ (35€/month)
 
  * **_HIDDEN IMPUT_** : A hidden input block is implemented after each input code, where costs are established for each opcion of the input block, to be porcessed later by _PHP_ script in order to be shown after processing.
 
    * **_SUBMIT BUTTON_** : Once the customer choices are finished, is invited to click the submit button to send data. It open the _PHP_ processed page wich shows, in a table, selections and costs of each and total amount per month of the subscription.

### CITY_GYM.PHP

Where _PHP_ code are implemented. The data are collected by _POST_ method.
To avoid errors if no selection is done, for each input block, first step is check if is any selected, if not, no cost is added and a 'No selected...' message is displayed. For each option selected, the name of the option and its cost appears in the table and this cost is added into a global variable to be shown as _Total amount_.

