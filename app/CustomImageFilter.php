Intervention\Image\Filters\FilterInterface
namespace CustomImageFilter;

class CustomImageFilter implements FilterInterface
{
   
    public function applyFilter(\Intervention\Image\Image $image)
    {
        $image->pixelate($this->size);
        $image->greyscale();

        return $image;
    }
}