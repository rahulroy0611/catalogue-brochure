<header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Cataogue E-Shop</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Options
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add_category.php"
                  >Add Category</a
                >
                <a class="dropdown-item" href="add_subcategory.php"
                  >Add Subcategory</a
                >
                <a class="dropdown-item" href="add_size.php"
                  >Add Sizes</a
                >
                <a class="dropdown-item" href="products.php">All Products</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Admin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="sell_record.php">Sell Record</a>
                <a class="dropdown-item" href="buy_record.php">Buy Record</a>
                <a class="dropdown-item" href="add.php">Extra Option</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"
                >Logout <span class="sr-only">(current)</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
    </header>