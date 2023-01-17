import { useEffect } from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/inertia-react";
import GuestLayout from "@/Layouts/GuestLayout";

export default function Register({ auth, user = {} }) {
    const { data, setData, post, put, transform, processing, errors, reset } =
        useForm({
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
        });

    useEffect(() => {
        if (user?.id) {
            setData({ ...data, name: user.name, email: user.email });
        }
    }, []);

    useEffect(() => {
        return () => {
            reset("password", "password_confirmation");
        };
    }, []);

    const onHandleChange = (event) => {
        setData(
            event.target.name,
            event.target.type === "checkbox"
                ? event.target.checked
                : event.target.value
        );
    };

    const submit = (e) => {
        e.preventDefault();

        if (!user?.id) {
            if (route().current() === "register") {
                post(route("register"));
                return;
            }

            post(route("users.store"));

            return;
        }

        put(route("users.update", user.id));
    };

    return (
        <>
            {route().current() !== "register" ? (
                <AuthenticatedLayout
                    auth={auth}
                    header={
                        <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                            Nuevo Usuario
                        </h2>
                    }
                >
                    <Head title="Register" />

                    <form
                        onSubmit={submit}
                        className="w-[90%] lg:w-2/5 mx-auto mt-4"
                    >
                        <div>
                            <InputLabel forInput="name" value="Nombre" />

                            <TextInput
                                id="name"
                                name="name"
                                value={data.name}
                                className="mt-1 block w-full"
                                autoComplete="name"
                                isFocused={true}
                                handleChange={onHandleChange}
                                required
                            />

                            <InputError
                                message={errors.name}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel forInput="email" value="Email" />

                            <TextInput
                                id="email"
                                type="email"
                                name="email"
                                value={data.email}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                handleChange={onHandleChange}
                                required
                            />

                            <InputError
                                message={errors.email}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel forInput="password" value="Contraseña" />

                            <TextInput
                                id="password"
                                type="password"
                                name="password"
                                value={data.password}
                                className="mt-1 block w-full"
                                autoComplete="new-password"
                                handleChange={onHandleChange}
                                required={!user.id}
                            />

                            <InputError
                                message={errors.password}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel
                                forInput="password_confirmation"
                                value="Confirmar contraseña"
                            />

                            <TextInput
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                value={data.password_confirmation}
                                className="mt-1 block w-full"
                                handleChange={onHandleChange}
                                required={!user.id}
                            />

                            <InputError
                                message={errors.password_confirmation}
                                className="mt-2"
                            />
                        </div>

                        <div className="flex items-center justify-center gap-2 mt-4">
                            <PrimaryButton processing={processing}>
                                {!user?.id
                                    ? "Crear Usuario"
                                    : "Actualizar Usuario"}
                            </PrimaryButton>
                            {user.id && (
                                <Link
                                    className={`inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-gray-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150`}
                                    href={route("users.destroy", user.id)}
                                    method="delete"
                                    as="button"
                                >
                                    Eliminar Usuario
                                </Link>
                            )}
                        </div>
                    </form>
                </AuthenticatedLayout>
            ) : (
                <GuestLayout>
                    <Head title="Register" />

                    <form onSubmit={submit} className="w-full mx-auto mt-4">
                        <div>
                            <InputLabel forInput="name" value="Nombre" />

                            <TextInput
                                id="name"
                                name="name"
                                value={data.name}
                                className="mt-1 block w-full"
                                autoComplete="name"
                                isFocused={true}
                                handleChange={onHandleChange}
                                required
                            />

                            <InputError
                                message={errors.name}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel forInput="email" value="Email" />

                            <TextInput
                                id="email"
                                type="email"
                                name="email"
                                value={data.email}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                handleChange={onHandleChange}
                                required
                            />

                            <InputError
                                message={errors.email}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel forInput="password" value="Contraseña" />

                            <TextInput
                                id="password"
                                type="password"
                                name="password"
                                value={data.password}
                                className="mt-1 block w-full"
                                autoComplete="new-password"
                                handleChange={onHandleChange}
                                required
                            />

                            <InputError
                                message={errors.password}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel
                                forInput="password_confirmation"
                                value="Confirmar contraseña"
                            />

                            <TextInput
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                value={data.password_confirmation}
                                className="mt-1 block w-full"
                                handleChange={onHandleChange}
                                required
                            />

                            <InputError
                                message={errors.password_confirmation}
                                className="mt-2"
                            />
                        </div>

                        <div className="flex items-center justify-between gap-2 mt-4">
                            <Link href={route('login')}>
                            ¿Ya estás registrado?
                            </Link>
                            <PrimaryButton processing={processing}>
                                Crear Usuario
                            </PrimaryButton>
                        </div>
                    </form>
                </GuestLayout>
            )}
        </>
    );
}
