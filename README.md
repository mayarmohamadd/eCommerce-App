# My E-commerce API
 E-commerce API that allows users to manage products, features, add items to the cart, and checkout. The API includes authentication using Laravel Sanctum, allowing users to register, login, and access protected routes for profile management and shopping cart operations.

## Features

- **User Authentication**: Register, Login, Logout, and Profile management.
- **Product Management**: Retrieve products with filters based on features.
- **Cart Management**: Add products to the cart and proceed to checkout.
- **Checkout System**: View products in the user's cart with the total amount.


## API Endpoints

##Authentication Routes:
*POST /login: Authenticates a user.
*POST /register: Registers a new user.
*POST /logout: Logs out the current authenticated user.
*GET /profile: Fetches the authenticated user's profile.
*PUT /profile/update: Allows the user to update their profile.

##Product and Feature Management:
*GET /features: Retrieves all features.
*GET /products: Retrieves all products.
*POST /products-by-feature: Retrieves products filtered by feature.
*POST /product-by-name: Fetches product data by its name.

##Cart Management:
*POST /add-to-cart: Adds a product to the cart.
*GET /checkout: Displays all products added to the user's cart along with the total price.

