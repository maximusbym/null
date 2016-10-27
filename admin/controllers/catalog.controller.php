<?php
if ($action == 'catalog'){

    if (!empty($_POST)){
        $catalogCreateByPOST = isset($_POST['create_catalog']) ? $_POST['create_catalog'] : null;
        $catalogUpdateByPOST = isset($_POST['catalog']) ? $_POST['catalog'] : null;

        // update catalog
        if ($catalogUpdateByPOST){
            $categoryTitle = $catalogUpdateByPOST['name'];
            $categoryId = $catalogUpdateByPOST['id'];
            $update = updateCategoryBuId($pdo,$categoryId,$categoryTitle);
        }
        // create catalog
        if ($catalogCreateByPOST){
            $CategoryName = $catalogCreateByPOST;
            $create = createCategory($pdo, $CategoryName);
        }

    }
    if (!empty($_GET)){
        //$productsCategory = isset($_GET['products']) ? $_GET['products'] : null;
        $updateId = isset($_GET['update']) ? $_GET['update'] : null;
        $deleteId = isset($_GET['delete']) ? $_GET['delete'] : null;
        $create = isset($_GET['create']) ? $_GET['create'] : null;

        // update catalog (view)
        if (isset($updateId)){
            $category = getCategoryById($pdo,$updateId);
            view('catalog/catalog_update', $category);
        }
        // delete catalog by id
        if (isset($deleteId)){
            $deleteCategory = deleteCategoryById($pdo, $deleteId);

        }
        // create category (view)
        if (isset($create)){
            view('catalog/catalog_create');
        }

    }
    if (!isset($productsCategory)){
        $category =  getCategories($pdo);
        view('catalog/catalog', $category);
    }
    else {

    }
}