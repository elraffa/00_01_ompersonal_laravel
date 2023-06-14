import React from "react";
import PrimaryButton from "./PrimaryButton";

export default function Wysiwyg ({ content, setContent, handleContentChange }) {
    return (
        <div>
                <input
                    type="hidden"
                    id="trix"
                    value={content}
                    onChange={(e) => setContent(e.target.value)}
                />
                <trix-editor 
                    input="trix"
                    value={content}
                    onChange={(e) => setContent(e.target.value)}

                    name='content'
                />
                <PrimaryButton type="submit" className="btn btn-primary mt-4">
                    Enviar
                </PrimaryButton>
            </div>
    )
}