import React, {useState} from "react";
import { format } from "date-fns";
import { Link } from "@inertiajs/inertia-react";
import UserSearch from '@/Components/UserSearch';


const Paginator = ({ data, routeCreate, routeEdit }) => {

    const [filteredUsers, setFilteredUsers] = useState(data.data); // New state for filtered users

    const handleFilter = (filteredUsers) => {
        setFilteredUsers(filteredUsers);
    };
    
    return (
        <div className="w-[90%] lg:w-3/4 mx-auto">
            <div className="mt-6 flex flex-col gap-2 sm:flex-row-reverse items-center justify-between">
                <div className="flex items-center justify-center">
                    {routeEdit === "users" ? (
                        <Link
                            className="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            href={routeCreate}
                        >
                            Nuevo Usuario
                        </Link>
                    ) : (
                        <a
                            className="px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            href={route("members.export")}
                            target="_blank"
                        >
                            Descargar CSV
                        </a>
                    )}
                </div>
                <UserSearch data={data} onFilter={handleFilter} />
            </div>
            <div className="relative mt-6 h-full overflow-x-auto overflow-y-hidden shadow-md sm:rounded-lg">
                <table className="w-full text-sm text-left text-gray-500">
                    <thead className="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" className="px-6 py-3">
                                Nombre
                            </th>
                            {routeEdit === "members" && (
                                <th scope="col" className="px-6 py-3">
                                    Apellido
                                </th>
                            )}
                            <th scope="col" className="px-6 py-3">
                                Email
                            </th>
                            {routeEdit === "users" && (
                                <th scope="col" className="px-6 py-3">
                                    Rol
                                </th>
                            )}

                            <th scope="col" className="px-6 py-3">
                                Fecha de creación
                            </th>
                            <th scope="col" className="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {filteredUsers.map((element) => (
                            <tr
                                key={element.id}
                                className="bg-white border-b hover:bg-gray-50"
                            >
                                <td
                                    scope="row"
                                    className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {element.name}
                                </td>
                                {routeEdit === "members" && (
                                    <td className="px-6 py-4">
                                        {element.last_name}
                                    </td>
                                )}
                                <td className="px-6 py-4">{element.email}</td>
                                {routeEdit === "users" && (
                                    <td className="px-6 py-4">
                                        {element?.role?.name.toUpperCase()}
                                    </td>
                                )}
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
                                            as="button"
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
                            link.label === "&laquo; Anterior" ? (
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
                            ) : link.label === "Siguiente &raquo;" ? (
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
