<?php
class Category
{
    public $category;

    public function _construct(String $category)
    {
        if ($category == 'Dog') {
            $this->category = 'https://banner2.cleanpng.com/20180511/lvw/kisspng-dog-grooming-pet-computer-icons-5af635b0597731.2198239315260850403665.jpg';
        } else if ($category == 'Cat') {
            $this->category = 'https://banner2.cleanpng.com/20180622/jzb/kisspng-cat-computer-icons-pet-5b2d8211e134c4.3453259815297090739225.jpg';
        }
    }
}
