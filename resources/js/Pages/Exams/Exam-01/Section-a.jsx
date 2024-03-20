import React from 'react'

const Section = ({ section, questions }) => (
    <div className="mb-6">
        <h2 className="text-xl font-bold mb-4">{section}</h2>

        {questions.map((question, index) => (
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
)

export default Section