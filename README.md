# Code CRUD Controller

For Code Clans Team to use as generic fast tool to build web application

## Version

Ther is no versioning as this one for internal use only.
Currently only dev version.

## Installation

1. You need to have access to gitlab repository https://gitlab.com/codexcambodia/grud
2. Add the repositories in composer.json
```json
    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "git@gitlab.com:codexcambodia/grud.git"
        }
        ....
    ],
```
3. Run composer to install package
```shell
    composer require codeclans/crud
```
4. Publish
```shell
    php artisan vendor:publish --tag=codeclans-crud
```
## Usages
### Basic Usage
Extends the controll with CrudController class
```php
use CodeClans\CRUD\Controllers\Admin\CrudController;

class UserTypeController extends CrudController{

    ...

}
```
Overwite the follow properties:
- **model** : the class of model
- **route** : the resource route name 
- **listFields** : model fields that will display on the list
- **formFields**: model fields that will display as form for input
Example:
```php
protected $model = UserType::class;
protected $route = 'admin.user-types';

protected $listFields = ['name','other_field'];
protected $formFields = ['name','other_field'];
```
### Other Properties
- **textAreaFields** : specified the array of fields name that the form will display textarea instead of text field
- **dateFields** : specified the array of fields name that the form will display date input instead of text field
- **imageFields**: specified the array of fields name that the form will display image browse box instead of text field. Format: 'field_name' => [width, height]
Example:
```php
protected $textAreaFields = [
    'address',
    'address_alt',
];

protected $dateFields = [
    'register_date',
    'created_at',
];

protected $imageFields = [
    'logo_url' => [200, 200],
];
```

### Dictionary Fields
property **dictionaryFields** is used to convert fields to dropdown from the dictionary 



1. create dictionary in app/config/crud.php
```php
'dict' => [
    ...
    'gender' => [
        'male',
        'female'
    ],
    ...
]
```
2. define the dictionaryFields in crud controller ( Format: 'field' => 'dictionary_name' )
```php
protected $dictionaryFields = ['gender' => 'gender'];
```

### Many to Many Relationship
Sometimes you happen to make crud with many to many relation ship. CRUD can help you to display form like this:
![](readme/screen_many_to_many_form.png)
to do that you need to extends method **createRelatedCrudMultiple** by calling method **addRelatedCrudMultiple** inside. **addRelatedCrudMultiple**  accept the following parametters:
- String **$virtualFieldName** : virtual filed name for data submission, don't use the the real name. You can use prefix **virtual_**.
- String **$relatedCrudClassName** : CRUDController class name to query list 
- array **$selectedFields** : The list of fields that will be displayed
- String **$relationModelClassName** : Model Class that is the middle table
- array **$relationFields** : array of two fields in relation table
- array **$defaultSavedValues** : Unimplemented
- array **$whereQueries** : Unimplemented

Example:
```php
protected function createRelatedCrudMultiple(){
        //sample
      
        $this->addRelatedCrudMultiple('virtual_companies',CompanyController::class,['name','company_type_id'],UserCompany::class,['user_id','accessible_company_id'],[],[]);
    }

```
## Sample Crud Controller
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Domains\Company\Company;
use CodeClans\CRUD\Controllers\Admin\CrudController;

class CompanyController extends CrudController
{
    protected $model = Company::class;
    protected $route = 'admin.companies';
    protected $listFields = [
        'name',
        'logo_url',
        'register_date',
        'email',
        'website',
        'vat_tin',
        'phone_primary',
        'company_type_id',
        'created_at',
    ];
    protected $formFields = [
        'name',
        'name_alt',
        'company_type_id',
        'logo_url',
        'register_date',
        'address',
        'address_alt',
        'email',
        'website',
        'vat_tin',
        'phone_primary',
        'phone_secondary',
        'created_at',
    ];
    protected $fieldCreatedBy = 'created_by_user_id';
    protected $singleSelects = [
        'company_type_id' => [ 'company_types', 'id', 'name' ],
    ];

    protected $textAreaFields = [
        'address',
        'address_alt',
    ];

    protected $dateFields = [
        'register_date',
        'created_at',
    ];

    protected $imageFields = [
        'logo_url' => [200, 200],
    ];
}
```


