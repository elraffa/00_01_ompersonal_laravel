import React, { useEffect, useState } from 'react'

const Exam01 = ({ exam }) => {
    const [currentPage, setCurrentPage] = useState(1);
    const questionsPerPage = 20;

    useEffect(() => {
        console.log(exam);
    }, [exam]);

    const paginate = (pageNumber) => setCurrentPage(pageNumber);

    // Function to divide questions into sections
    const chunk = (arr, size) =>
        Array.from({ length: Math.ceil(arr.length / size) }, (v, i) =>
            arr.slice(i * size, i * size + size)
        );

    // Divide questions into sections
    const sections = chunk(exam.questions, 10);

    return (
        <div className="p-6 bg-white rounded shadow">
            <h1 className="text-2xl font-bold mb-4">{exam.name}</h1>

            {sections.map((section, index) => (
                <div key={index} className="mb-6">
                    <h2 className="text-xl font-bold mb-4">Section {index + 1}</h2>

                    {section.map((question, index) => (
                        <div key={index} className="mb-2">
                            <p className="mb-2 font-semibold">{question.question_text}</p>

                            {question.choices.map((choice, index) => (
                                <div key={index} className="mb-2">
                                    <input type="radio" name={`question-${question.id}`} value={choice.id} className="mr-2" />
                                    <label>{choice.choice_text}</label>
                                </div>
                            ))}
                        </div>
                    ))}
                </div>
            ))}

            <div className="pagination">
                {[...Array(Math.ceil(exam.questions.length / questionsPerPage)).keys()].map(number => (
                    <button key={number} onClick={() => paginate(number + 1)}>
                        {number + 1}
                    </button>
                ))}
            </div>
        </div>
    )
}

export default Exam01