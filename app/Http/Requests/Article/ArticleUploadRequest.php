<?php
namespace App\Http\Requests\Article;

use App\Http\Requests\Request;

class ArticleUploadRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'upload' => 'required|image',
        ];
    }
}
