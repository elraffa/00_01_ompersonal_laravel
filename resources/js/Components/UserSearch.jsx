import React, { useState, useEffect } from 'react';
import axios from 'axios';
//import Inertia from "@inertiajs/inertia-react";
import { Inertia } from '@inertiajs/inertia';

function UserSearch({ data, onFilter }) {
    const [query, setQuery] = useState('');
    const [users, setUsers] = useState([]);
    const [filteredUsers, setFilteredUsers] = useState([]);

    useEffect(() => {
        setFilteredUsers(data.data);
      }, [data.data]);

    const handleFilter = (e) => {
        const filterQuery = e.target.value;
        setQuery(filterQuery);

        Inertia.get('/users', { search: filterQuery }, {
            preserveState: true,
        });
    };

    return (
        <div className="flex flex-row">
            <label htmlFor="table-search" className="sr-only">
                Search
            </label>
            <div className="relative mt-1">
                <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg
                        className="w-5 h-5 text-gray-500"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fillRule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clipRule="evenodd"
                        ></path>
                    </svg>
                </div>
                <div className="flex flex-row">
                <input
                    type="text"
                    value={query}
                    className="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    onChange={handleFilter} 
                />
                </div>
            </div>
        </div>

    );
}

export default UserSearch;
