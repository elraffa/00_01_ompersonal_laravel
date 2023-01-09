import React from "react";
import { format } from "date-fns";
import { Link } from "@inertiajs/inertia-react";

const Paginator = ({ data, routeCreate, routeEdit }) => {
    return (
        <div className="w-[90%] lg:w-3/4 mx-auto">
            <div className="mt-6 flex flex-col gap-2 sm:flex-row-reverse items-center justify-between">
                <div className="flex items-center justify-center">
                    {routeEdit === "users" && (
                        <Link
                            className="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            href={routeCreate}
                        >
                            Nuevo Usuario
                        </Link>
                    )}
                </div>
                <div>
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
                        <input
                            type="text"
                            id="table-search"
                            className="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Buscar usuarios"
                        />
                    </div>
                </div>
            </div>
            <div className="relative mt-6 h-full overflow-x-auto overflow-y-hidden shadow-md sm:rounded-lg">
                <table className="w-full text-sm text-left text-gray-500">
                    <thead className="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" className="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" className="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" className="px-6 py-3">
                                Fecha de creación
                            </th>
                            <th scope="col" className="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {data.data.map((element) => (
                            <tr
                                key={element.id}
                                className="bg-white border-b hover:bg-gray-50"
                            >
                                <th
                                    scope="row"
                                    className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {element.name}
                                </th>
                                <td className="px-6 py-4">{element.email}</td>
                                <td className="px-6 py-4">
                                    {format(
                                        new Date(element.created_at),
                                        "dd-MM-yyyy hh:mm"
                                    )}
                                </td>
                                <td className="px-6 py-4">
                                    {routeEdit === "users" ? (
                                        <Link
                                            href={`${routeEdit}/${element.id}/edit`}
                                            className="font-medium text-blue-600 hover:underline"
                                        >
                                            Editar
                                        </Link>
                                    ) : (
                                        <Link
                                            method="delete"
                                            href={route(
                                                `${routeEdit}.destroy`,
                                                element.id
                                            )}
                                            className="font-medium text-red-600 hover:underline"
                                        >
                                            Eliminar
                                        </Link>
                                    )}
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
                <nav
                    className="flex flex-col gap-2 lg:flex-row items-center justify-between p-4"
                    aria-label="Table navigation"
                >
                    <span className="text-sm font-normal text-gray-500 ">
                        Mostrando{" "}
                        <span className="font-semibold text-gray-900 ">
                            {data.data.length}
                        </span>{" "}
                        de{" "}
                        <span className="font-semibold text-gray-900 ">
                            {data.total}
                        </span>
                    </span>
                    <ul
                        className={`${
                            data.total <= data.per_page && "hidden"
                        } inline-flex items-center -space-x-px`}
                    >
                        {data.links.map((link) =>
                            link.label === "&laquo; Previous" ? (
                                <li key={link.label}>
                                    <Link
                                        href={link.url}
                                        className="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700"
                                    >
                                        <svg
                                            className="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fillRule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clipRule="evenodd"
                                            ></path>
                                        </svg>
                                    </Link>
                                </li>
                            ) : link.label === "Next &raquo;" ? (
                                <li key={link.label}>
                                    <Link
                                        href={link.url}
                                        className="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700"
                                    >
                                        <span className="sr-only">Next</span>
                                        <svg
                                            className="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fillRule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clipRule="evenodd"
                                            ></path>
                                        </svg>
                                    </Link>
                                </li>
                            ) : (
                                <li key={link.label}>
                                    <Link
                                        href={link.url}
                                        className={`${
                                            link.active &&
                                            "text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700"
                                        } px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700`}
                                    >
                                        {link.label}
                                    </Link>
                                </li>
                            )
                        )}
                    </ul>
                </nav>
            </div>
        </div>
    );
};

export default Paginator;
