# SUMMARY

This module allows you to add autocomplete functionality to virtually any fields of a Drupal site. During the input, the field will be expanded and offers a list of suggestions before you start the search.
Suggestions can be provided by the View module using any of your website entity, or by a custom or even external callback.

By default, the module integrates with search forms from the Drupal core Search and Search Block, providing search among nodes, users and wording.
Basic scenarios can be done via the UI directly, for instance to provide autocompletion in a view exposed filter.

Virtually any complex scenario can be created using some easy custom code by advanced users. For instance searching among tweets, Google locations, any data an API can provide.
The custom code will therefore proxy this API call to transform it's result into something this module can digest.

For a full description visit project page: https://www.drupal.org/project/search_autocomplete

# REQUIREMENTS

*None. (Other than a clean Drupal 8 installation)

# INSTALLATION

Install as usual. We advice using composer for this:
`composer require drupal/search_autocomplete`

Cleaning the cache after installation may be required.

#  CONFIGURATION

After the installation, you have can add a new Autocompletion Configuration at admin/config/search/search_autocomplete.

1. Fill out the "Human readable name" with for example "My Autocomplete search".
2. In the "ID selector" field, put the class of your Search field, for example "input#edit-keys".
3. Flush all caches

The Search Autocomplete should now work with your Search field.

NOTE: step 2 can be made automatically by using the specifically provided admin tool.
