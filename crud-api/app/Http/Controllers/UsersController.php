<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;

/**
 * @group User Management
 *
 * APIs for managing users
 */
class UsersController extends Controller
{
    /**
     * Get User
     *
     * Retrieve a specific user by their ID.
     *
     * @urlParam id int required The ID of the user. Example: 1
     * 
     * @response 200 {
     *   "id": 1,
     *   "firstname": "John",
     *   "lastname": "Doe", 
     *   "number": "1234567890",
     *   "email": "john.doe@example.com",
     *   "address": "123 Main St, City, State",
     *   "created_at": "2024-01-01T00:00:00.000000Z",
     *   "updated_at": "2024-01-01T00:00:00.000000Z"
     * }
     * 
     * @response 404 {
     *   "message": "User not found"
     * }
     */
    public function getUser($id): JsonResponse
    {
        // TODO: Implement user retrieval logic
        return response()->json(['message' => 'Get user endpoint - implementation pending']);
    }

    /**
     * Create New User
     *
     * Create a new user with the provided information.
     *
     * @bodyParam firstname string required The user's first name. Example: John
     * @bodyParam lastname string required The user's last name. Example: Doe
     * @bodyParam number string required The user's phone number. Example: 1234567890
     * @bodyParam email string required The user's email address. Example: john.doe@example.com
     * @bodyParam address string required The user's address. Example: 123 Main St, City, State
     * 
     * @response 201 {
     *   "id": 1,
     *   "firstname": "John",
     *   "lastname": "Doe",
     *   "number": "1234567890", 
     *   "email": "john.doe@example.com",
     *   "address": "123 Main St, City, State",
     *   "created_at": "2024-01-01T00:00:00.000000Z",
     *   "updated_at": "2024-01-01T00:00:00.000000Z"
     * }
     * 
     * @response 422 {
     *   "message": "The given data was invalid.",
     *   "errors": {
     *     "email": ["The email field is required."]
     *   }
     * }
     */
    public function createNewUser(CreateUserRequest $request): JsonResponse
    {
        // TODO: Implement user creation logic
        return response()->json(['message' => 'Create new user endpoint - implementation pending']);
    }

    /**
     * Update User
     *
     * Update an existing user with the provided information.
     *
     * @urlParam id int required The ID of the user to update. Example: 1
     * @bodyParam firstname string required The user's first name. Example: John
     * @bodyParam lastname string required The user's last name. Example: Doe
     * @bodyParam number string required The user's phone number. Example: 1234567890
     * @bodyParam email string required The user's email address. Example: john.doe@example.com
     * @bodyParam address string required The user's address. Example: 123 Main St, City, State
     * 
     * @response 200 {
     *   "id": 1,
     *   "firstname": "John",
     *   "lastname": "Doe",
     *   "number": "1234567890",
     *   "email": "john.doe@example.com", 
     *   "address": "123 Main St, City, State",
     *   "created_at": "2024-01-01T00:00:00.000000Z",
     *   "updated_at": "2024-01-01T00:00:00.000000Z"
     * }
     * 
     * @response 404 {
     *   "message": "User not found"
     * }
     * 
     * @response 422 {
     *   "message": "The given data was invalid.",
     *   "errors": {
     *     "email": ["The email field is required."]
     *   }
     * }
     */
    public function updateUser($id, UpdateUserRequest $request): JsonResponse
    {
        // TODO: Implement user update logic
        return response()->json(['message' => 'Update user endpoint - implementation pending']);
    }
}