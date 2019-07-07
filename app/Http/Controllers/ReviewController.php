<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Model\Product;
use App\Model\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return ReviewResource::collection($product->reviews);
    }

	/**
	 * @param  ReviewRequest  $request
	 * @param  Product        $product
	 *
	 * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
	 */
    public function store(ReviewRequest $request, Product $product)
    {
		$review = new Review($request->all());
		$product->reviews()->save($review);

	    return response(['data' => new ReviewResource($review)],201);
    }


	/**
	 * @param  Request  $request
	 * @param  Product  $product
	 * @param  Review   $review
	 *
	 * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
	 */
    public function update(Request $request,Product $product,Review $review)
    {
        $review->update($request->all());

        return response(['data' => new ReviewResource($review)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,Review $review)
    {
        $review->delete();

	    return response(null,204);
    }
}
