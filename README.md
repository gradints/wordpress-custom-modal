# wordpress-custom-modal
this feature make custom modal


# HOW TO USE
- copy folder to child-theme asset

- open function.php in child theme n copy this code
    ```php
    require_once('wordpress-custom-modal/logic.php');
    ```
- implementation => display custom modal using shortcode 
    ```php
    [modal id="<MODAL_ID>"]
      <MODAL CONTENT>
    [/modal]
    ```
